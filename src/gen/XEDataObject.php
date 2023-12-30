<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XEDataObject extends XEDataObjectConst
{
    public function setDisplay(null|DisplayPtr $value)
    {
        $this->cdata->display = $value?->cdata;
    }

    public function setVisual(null|VisualPtr $value)
    {
        $this->cdata->visual = $value?->cdata;
    }

    public function setScreen(null|ScreenPtr $value)
    {
        $this->cdata->screen = $value?->cdata;
    }

    public function setPixmapFormat(null|ScreenFormatPtr $value)
    {
        $this->cdata->pixmap_format = $value?->cdata;
    }

    public function setFont(null|XFontStructPtr $value)
    {
        $this->cdata->font = $value?->cdata;
    }
}
