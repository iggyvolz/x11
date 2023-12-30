<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMStringConst extends \iggyvolz\x11\XStruct
{
    public function getMultiByte(): string
    {
        return \FFI::string($this->cdata->multi_byte);
    }

    public function getWideChar(): never
    {
        throw new \LogicException('Not yet implemented');
    }
}
