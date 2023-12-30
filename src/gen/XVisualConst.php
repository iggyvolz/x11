<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XVisualConst extends \iggyvolz\x11\XStruct
{
    public function getExtData(): null|XExtDataPtr
    {
        return \is_null($this->cdata->ext_data) ? null : new \iggyvolz\x11\gen\XExtDataPtr($this->cdata->ext_data);
    }

    public function getVisualid(): int
    {
        return $this->cdata->visualid;
    }

    public function getClass(): int
    {
        return $this->cdata->class;
    }

    public function getRedMask(): int
    {
        return $this->cdata->red_mask;
    }

    public function getGreenMask(): int
    {
        return $this->cdata->green_mask;
    }

    public function getBlueMask(): int
    {
        return $this->cdata->blue_mask;
    }

    public function getBitsPerRgb(): int
    {
        return $this->cdata->bits_per_rgb;
    }

    public function getMapEntries(): int
    {
        return $this->cdata->map_entries;
    }
}
