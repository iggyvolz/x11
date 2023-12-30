<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XServerInterpretedAddress extends XServerInterpretedAddressConst
{
    public function setTypelength(int $value)
    {
        $this->cdata->typelength = $value;
    }

    public function setValuelength(int $value)
    {
        $this->cdata->valuelength = $value;
    }
}
