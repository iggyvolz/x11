<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XmbTextItemConst extends \iggyvolz\x11\XStruct
{
    public function getChars(): string
    {
        return \FFI::string($this->cdata->chars);
    }

    public function getNchars(): int
    {
        return $this->cdata->nchars;
    }

    public function getDelta(): int
    {
        return $this->cdata->delta;
    }

    public function getFontSet(): never
    {
        throw new \LogicException('Not yet implemented');
    }
}
