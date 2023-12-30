<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XScreenFormat extends XScreenFormatConst
{
    public function setExtData(null|XExtDataPtr $value)
    {
        $this->cdata->ext_data = $value?->cdata;
    }

    public function setDepth(int $value)
    {
        $this->cdata->depth = $value;
    }

    public function setBitsPerPixel(int $value)
    {
        $this->cdata->bits_per_pixel = $value;
    }

    public function setScanlinePad(int $value)
    {
        $this->cdata->scanline_pad = $value;
    }
}
