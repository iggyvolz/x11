<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XOMFontInfo extends XOMFontInfoConst
{
    public function setNumFont(int $value)
    {
        $this->cdata->num_font = $value;
    }

    public function setFontStructList(null|XFontStructPtrPtr $value)
    {
        $this->cdata->font_struct_list = $value?->cdata;
    }
}
