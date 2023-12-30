<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class ScreenFormatConst extends \iggyvolz\x11\XStruct
{
    public function getExtData(): null|XExtDataPtr
    {
        return \is_null($this->cdata->ext_data) ? null : new \iggyvolz\x11\gen\XExtDataPtr($this->cdata->ext_data);
    }

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
