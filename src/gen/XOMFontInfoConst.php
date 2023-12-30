<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XOMFontInfoConst extends \iggyvolz\x11\XStruct
{
    public function getNumFont(): int
    {
        return $this->cdata->num_font;
    }

    public function getFontStructList(): null|XFontStructPtrPtr
    {
        return \is_null($this->cdata->font_struct_list) ? null : new \iggyvolz\x11\gen\XFontStructPtrPtr($this->cdata->font_struct_list);
    }

    public function getFontNameList(): never
    {
        throw new \LogicException('Not yet implemented');
    }
}
