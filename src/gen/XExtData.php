<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XExtData extends XExtDataConst
{
    public function setNumber(int $value)
    {
        $this->cdata->number = $value;
    }

    public function setFreePrivate(null|\FFI\CData $value)
    {
        $this->cdata->free_private = $value;
    }

    public function setPrivateData(null|\FFI\CData $value)
    {
        $this->cdata->private_data = $value;
    }
}
