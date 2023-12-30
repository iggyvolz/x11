<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XTextOrBitmap extends XTextOrBitmapConst
{
    public function setText(null|XIMTextPtr $value)
    {
        $this->cdata->text = $value?->cdata;
    }

    public function setBitmap(int $value)
    {
        $this->cdata->bitmap = $value;
    }
}
