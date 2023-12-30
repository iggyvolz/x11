<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XVisual extends XVisualConst
{
    public function setExtData(null|XExtDataPtr $value)
    {
        $this->cdata->ext_data = $value?->cdata;
    }

    public function setVisualid(int $value)
    {
        $this->cdata->visualid = $value;
    }

    public function setClass(int $value)
    {
        $this->cdata->class = $value;
    }

    public function setRedMask(int $value)
    {
        $this->cdata->red_mask = $value;
    }

    public function setGreenMask(int $value)
    {
        $this->cdata->green_mask = $value;
    }

    public function setBlueMask(int $value)
    {
        $this->cdata->blue_mask = $value;
    }

    public function setBitsPerRgb(int $value)
    {
        $this->cdata->bits_per_rgb = $value;
    }

    public function setMapEntries(int $value)
    {
        $this->cdata->map_entries = $value;
    }
}
