<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMStringConversionCallbackStruct extends XIMStringConversionCallbackStructConst
{
    public function setFactor(int $value)
    {
        $this->cdata->factor = $value;
    }

    public function setText(null|XIMStringConversionTextPtr $value)
    {
        $this->cdata->text = $value?->cdata;
    }
}
