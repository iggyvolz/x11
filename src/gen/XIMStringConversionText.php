<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMStringConversionText extends XIMStringConversionTextConst
{
    public function setLength(int $value)
    {
        $this->cdata->length = $value;
    }

    public function setEncodingIsWchar(bool $value)
    {
        $this->cdata->encoding_is_wchar = $value === 1;
    }
}
