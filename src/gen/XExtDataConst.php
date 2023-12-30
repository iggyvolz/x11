<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XExtDataConst extends \iggyvolz\x11\XStruct
{
    public function getNumber(): int
    {
        return $this->cdata->number;
    }

    public function getNext(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getFreePrivate(): null|\FFI\CData
    {
        return $this->cdata->free_private;
    }

    public function getPrivateData(): null|\FFI\CData
    {
        return $this->cdata->private_data;
    }
}
