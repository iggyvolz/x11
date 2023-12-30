<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XHostAddress extends XHostAddressConst
{
    public function setFamily(int $value)
    {
        $this->cdata->family = $value;
    }

    public function setLength(int $value)
    {
        $this->cdata->length = $value;
    }
}
