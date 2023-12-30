<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XSetWindowAttributes extends XSetWindowAttributesConst
{
    public function setBackgroundPixmap(int $value)
    {
        $this->cdata->background_pixmap = $value;
    }

    public function setBackgroundPixel(int $value)
    {
        $this->cdata->background_pixel = $value;
    }

    public function setBorderPixmap(int $value)
    {
        $this->cdata->border_pixmap = $value;
    }

    public function setBorderPixel(int $value)
    {
        $this->cdata->border_pixel = $value;
    }

    public function setBitGravity(int $value)
    {
        $this->cdata->bit_gravity = $value;
    }

    public function setWinGravity(int $value)
    {
        $this->cdata->win_gravity = $value;
    }

    public function setBackingStore(int $value)
    {
        $this->cdata->backing_store = $value;
    }

    public function setBackingPlanes(int $value)
    {
        $this->cdata->backing_planes = $value;
    }

    public function setBackingPixel(int $value)
    {
        $this->cdata->backing_pixel = $value;
    }

    public function setSaveUnder(bool $value)
    {
        $this->cdata->save_under = $value === 1;
    }

    public function setEventMask(int $value)
    {
        $this->cdata->event_mask = $value;
    }

    public function setDoNotPropagateMask(int $value)
    {
        $this->cdata->do_not_propagate_mask = $value;
    }

    public function setOverrideRedirect(bool $value)
    {
        $this->cdata->override_redirect = $value === 1;
    }

    public function setColormap(int $value)
    {
        $this->cdata->colormap = $value;
    }

    public function setCursor(int $value)
    {
        $this->cdata->cursor = $value;
    }
}
