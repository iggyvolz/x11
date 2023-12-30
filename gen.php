<?php

use FFI\CData;
use iggyvolz\x11\XPtr;
use iggyvolz\x11\XStruct;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PsrPrinter;

require_once __DIR__ . "/vendor/autoload.php";

$lines = array_map(fn($s) => str_replace("\t", "  ", trim($s, "\r\n")), file(__DIR__ . "/Xlib.h"));
function get_defs(int &$i, bool $fromComment): Generator
{
    global $lines;
    while(!in_array($lines[++$i][0], ["}", ")"])) {
        $line = $lines[$i];
        if(preg_match("@/\\* (.+)\\*/@", $line, $matches)) {
            $comment = $matches[1];
            $line = str_replace($matches[0], "", $line);
        } else {
            $comment = "";
        }
        $line = trim($line);
        if($fromComment) {
            $type = trim($line, " ,");
            $name = trim($comment);
            if($type === "void") return;
        } else {
            $expl = explode(" ", $line);
            $name = array_pop($expl);

            $type = trim(implode(" ", $expl));
        }
        if(str_ends_with($name, ";") || str_ends_with($name, ",")) {
            $name = substr($name, offset: 0, length: -1);
        }
        while (str_starts_with($name, "*")) {
            $name = substr($name, 1);
            $type .= "*";
        }
        if(preg_match("/^(.+)\\[([0-9]+)]$/", $name, $matches)) {
            $type .= "[".$matches[2]."]";
            $name = $matches[1];
        }
        yield $name => $type;
    }
}
$files = [];
function create_pointer_class(string $name): void
{
    global $files;
    $fileName = __DIR__ . "/src/gen/$name.php";
    if(file_exists($fileName)) return; // Already done!
    $file = $files[$fileName] = (new PhpFile())->setStrictTypes();
    $class = $file->addNamespace("iggyvolz\\x11\\gen")->addClass($name);
    $classToReference = substr($name, 0, -3);
    $class->setExtends(XPtr::class);

    $offsetGet = $class->addMethod("offsetGet")->setReturnType("\\iggyvolz\\x11\\gen\\$classToReference");
    $offsetGet->addParameter("offset")->setType("mixed");
    $offsetGet->addBody('if(!is_int($offset)) throw new \LogicException();');
    $offsetGet->addBody("return new \\iggyvolz\\x11\\gen\\$classToReference(\$this->cdata[\$offset]);");
}
function to_struct_name(string $name, bool $full = false): string
{
    if(str_starts_with($name, "const ")) {
        $name = substr($name, strlen("const "));
        $const = true;
    } else {
        $const = false;
    }
    if($const) $name.= "Const";
    $name = preg_replace("/\\*/", "Ptr", $name);
    if(str_ends_with($name, "Ptr")) {
        create_pointer_class($name);
    }
    if($full) {
        return "\\iggyvolz\\x11\\gen\\$name";
    }
    return $name;
}
$knownStructs = [];
$x11 = ($files[__DIR__ . "/src/gen/X11.php"] = (new PhpFile())->setStrictTypes())->addNamespace("iggyvolz\\x11\\gen")->addClass("X11");
$x11->addMethod("__construct")->addPromotedParameter("ffi")->setType(FFI::class)->setPublic()->setReadOnly();
$init = $x11->addMethod("init")->setStatic()->setReturnType("self");
$init->addParameter("libpath", "libX11.so")->setType("string");
$init->addBody('return new self(\FFI::cdef(file_get_contents(__DIR__ . "/../../Xlib.h"), $libpath));');
for($i=0; $i<count($lines); $i++) {
    if(preg_match('/^typedef (struct|union) .*{$/', $lines[$i])) {
        $members = iterator_to_array(get_defs($i, false));
        if(preg_match("@^} ([a-zA-Z0-9]+);$@", $lines[$i], $matches)) {
            $name = $matches[1];
        } else {
            throw new LogicException("Couldn't match " . $lines[$i]);
        }
        $knownStructs[] = $name;
        $x11->addMethod("new$name")->setReturnType(to_struct_name($name, true))->addBody('return new ' . to_struct_name($name, true) . "(\$this->ffi->new('$name'));");
        $constClass = ($files[__DIR__ . "/src/gen/" . to_struct_name("const $name") . ".php"] = (new PhpFile())->setStrictTypes())
            ->addNamespace("iggyvolz\\x11\\gen")->addClass(to_struct_name("const $name"));
        $mutableClass = ($files[__DIR__ . "/src/gen/" . to_struct_name($name) . ".php"] = (new PhpFile())->setStrictTypes())
            ->addNamespace("iggyvolz\\x11\\gen")->addClass(to_struct_name($name));
        $mutableClass->setExtends(to_struct_name("const $name", true));
        $constClass->setExtends(XStruct::class);

        foreach ($members as $name => $type) {
            $phpName = implode("", array_map(ucfirst(...), explode("_", $name)));
            $getter = $constClass->addMethod("get" . ucfirst($phpName));
            if(in_array($type, ["int", "unsigned long", "unsigned int", "unsigned", "unsigned short", "short", "long", "char", "unsigned char", "Status", "XID", "Mask", "Atom", "VisualID", "Time", "Window", "Drawable", "Font", "Pixmap", "Cursor", "Colormap", "GContext", "KeySym"])) {
                $getter->setReturnType("int");
                $getter->addBody("return \$this->cdata->$name;");
                $setter = $mutableClass->addMethod("set" . ucfirst($phpName));
                $setter->addParameter("value")->setType("int");
                $setter->addBody("\$this->cdata->$name = \$value;");
            } elseif($type === "Bool") {
                $getter->setReturnType("bool");
                $getter->addBody("return \$this->cdata->$name === 1;");
                $setter = $mutableClass->addMethod("set" . ucfirst($phpName));
                $setter->addParameter("value")->setType("bool");
                $setter->addBody("\$this->cdata->$name = \$value === 1;");
            } elseif(in_array($type, $knownStructs)) {
                $getter->setReturnType("null|" . to_struct_name($type, true));
                $getter->addBody("return \is_null(\$this->cdata->$name) ? null : new " . to_struct_name($type, true) . "(\$this->cdata->$name);");
                // no setter - this doesn't make sense for a struct
            } elseif(in_array(trim($type, "*"), $knownStructs)) {
                $getter->setReturnType("null|" . to_struct_name($type, true));
                $getter->addBody("return \is_null(\$this->cdata->$name) ? null : new " . to_struct_name($type, true) . "(\$this->cdata->$name);");
                $setter = $mutableClass->addMethod("set" . ucfirst($phpName));
                $setter->addParameter("value")->setType("null|" . to_struct_name($type, true));
                $setter->addBody("\$this->cdata->$name = \$value?->cdata;");
            } elseif($type === "void*" || $type === "XPointer") {
                $getter->setReturnType("null|\\" . CData::class);
                $getter->addBody("return \$this->cdata->$name;");
                $setter = $mutableClass->addMethod("set" . ucfirst($phpName));
                $setter->addParameter("value")->setType("null|" . CData::class);
                $setter->addBody("\$this->cdata->$name = \$value;");
            } elseif($type === "char*") {
                $getter->setReturnType("string");
                $getter->addBody("return \FFI::string(\$this->cdata->$name);");
                // TODO we could probably add a setter by memcopying into an unmanaged char block but i'm not sure how to clean it up
            } else {
                $getter->setReturnType("never");
                $getter->addBody("throw new \LogicException('Not yet implemented');");
            }
        }
    }
    if(preg_match("/^extern (.+)\\( ?$/", $lines[$i],  $matches)) {
        $expl = explode(" ", $matches[1]);
        $name = array_pop($expl);
        if(str_starts_with($name, "_")) continue;

        $type = trim(implode(" ", $expl));
        while (str_starts_with($name, "*")) {
            $name = substr($name, 1);
            $type .= "*";
        }
        $function = $x11->addMethod($name);
//        echo "$name\n";
//        echo "$type\n";
        $members = iterator_to_array(get_defs($i, true));
        $function->addBody("\$result = \$this->ffi->$name(");
        foreach ($members as $name => $paramType) {
            $phpName = lcfirst(implode("", array_map(ucfirst(...), explode("_", $name))));
            $param = $function->addParameter($phpName);
            if(in_array($paramType, ["int", "unsigned long", "unsigned int", "unsigned", "unsigned short", "short", "long", "char", "unsigned char", "Status", "XID", "Mask", "Atom", "VisualID", "Time", "Window", "Drawable", "Font", "Pixmap", "Cursor", "Colormap", "GContext", "KeySym"])) {
                $param->setType("int");
                $function->addBody("  \$$phpName,");
            } elseif($paramType === "Bool") {
                $param->setType("bool");
                $function->addBody("  \$$phpName === 1,");
            } elseif(in_array(trim($paramType, "*"), $knownStructs)) {
                 $param->setType("null|" . to_struct_name($paramType, true));
                 $function->addBody("  \${$phpName}->cdata,");
            } elseif($paramType === "void*" || $paramType === "XPointer") {
                $param->setType("null|" . CData::class);
                $function->addBody("  \$$phpName,");
            } elseif($paramType === "const char*") {
                $param->setType("null|string");
                $function->addBody("  \$$phpName,");
            } else {
                $function->addBody("  throw new \LogicException(),");
//                echo "$name: $paramType\n";
            }
        }
        $function->addBody(");");
        if(in_array($type, ["int", "unsigned long", "unsigned int", "unsigned", "unsigned short", "short", "long", "char", "unsigned char", "Status", "XID", "Mask", "Atom", "VisualID", "Time", "Window", "Drawable", "Font", "Pixmap", "Cursor", "Colormap", "GContext", "KeySym"])) {
            $function->setReturnType("int");
            $function->addBody('return $result;');
        } elseif($type === "Bool") {
            $function->setReturnType("bool");
            $function->addBody('return $result === 1;');
        } elseif(in_array(trim($type, "*"), $knownStructs)) {
            $type = to_struct_name($type, true);
            $function->setReturnType("?".$type);
            $function->addBody("return \is_null(\$result) ? null : new $type(\$result);");
        } elseif($type === "void*" || $type === "XPointer") {
            $function->setReturnType($type);
            $function->addBody("return new $type(\$result);");
            // TODO
        } elseif($type !== "void") {
            $function->addBody("throw new \LogicException();");
//            echo "$name: $type\n";
        }
    }
}
$printer = new PsrPrinter();
foreach ($files as $path => $file) {
    if(!is_dir(dirname($path))) {
        mkdir(dirname($path), recursive: true);
    }
    file_put_contents($path, $printer->printFile($file));
}