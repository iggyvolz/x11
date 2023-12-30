<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XFontProp extends XFontPropConst
{
    public function setName(int $value)
    {
        $this->cdata->name = $value;
    }

    public function setCard32(int $value)
    {
        $this->cdata->card32 = $value;
    }
}
