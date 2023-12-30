<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XEDataObjectConst extends \iggyvolz\x11\XStruct
{
    public function getDisplay(): null|DisplayPtr
    {
        return \is_null($this->cdata->display) ? null : new \iggyvolz\x11\gen\DisplayPtr($this->cdata->display);
    }

    public function getGc(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getVisual(): null|VisualPtr
    {
        return \is_null($this->cdata->visual) ? null : new \iggyvolz\x11\gen\VisualPtr($this->cdata->visual);
    }

    public function getScreen(): null|ScreenPtr
    {
        return \is_null($this->cdata->screen) ? null : new \iggyvolz\x11\gen\ScreenPtr($this->cdata->screen);
    }

    public function getPixmapFormat(): null|ScreenFormatPtr
    {
        return \is_null($this->cdata->pixmap_format) ? null : new \iggyvolz\x11\gen\ScreenFormatPtr($this->cdata->pixmap_format);
    }

    public function getFont(): null|XFontStructPtr
    {
        return \is_null($this->cdata->font) ? null : new \iggyvolz\x11\gen\XFontStructPtr($this->cdata->font);
    }
}
