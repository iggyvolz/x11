<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XServerInterpretedAddressConst extends \iggyvolz\x11\XStruct
{
    public function getTypelength(): int
    {
        return $this->cdata->typelength;
    }

    public function getValuelength(): int
    {
        return $this->cdata->valuelength;
    }

    public function getType(): string
    {
        return \FFI::string($this->cdata->type);
    }

    public function getValue(): string
    {
        return \FFI::string($this->cdata->value);
    }
}
