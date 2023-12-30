<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XFontSetExtentsConst extends \iggyvolz\x11\XStruct
{
    public function getMaxInkExtent(): null|XRectangle
    {
        return \is_null($this->cdata->max_ink_extent) ? null : new \iggyvolz\x11\gen\XRectangle($this->cdata->max_ink_extent);
    }

    public function getMaxLogicalExtent(): null|XRectangle
    {
        return \is_null($this->cdata->max_logical_extent) ? null : new \iggyvolz\x11\gen\XRectangle($this->cdata->max_logical_extent);
    }
}
