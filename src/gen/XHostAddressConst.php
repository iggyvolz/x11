<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XHostAddressConst extends \iggyvolz\x11\XStruct
{
    public function getFamily(): int
    {
        return $this->cdata->family;
    }

    public function getLength(): int
    {
        return $this->cdata->length;
    }

    public function getAddress(): string
    {
        return \FFI::string($this->cdata->address);
    }
}
