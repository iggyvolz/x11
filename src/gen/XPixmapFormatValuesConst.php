<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XPixmapFormatValuesConst extends \iggyvolz\x11\XStruct
{
    public function getDepth(): int
    {
        return $this->cdata->depth;
    }

    public function getBitsPerPixel(): int
    {
        return $this->cdata->bits_per_pixel;
    }

    public function getScanlinePad(): int
    {
        return $this->cdata->scanline_pad;
    }
}
