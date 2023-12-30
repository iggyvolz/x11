<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XSetWindowAttributesConst extends \iggyvolz\x11\XStruct
{
    public function getBackgroundPixmap(): int
    {
        return $this->cdata->background_pixmap;
    }

    public function getBackgroundPixel(): int
    {
        return $this->cdata->background_pixel;
    }

    public function getBorderPixmap(): int
    {
        return $this->cdata->border_pixmap;
    }

    public function getBorderPixel(): int
    {
        return $this->cdata->border_pixel;
    }

    public function getBitGravity(): int
    {
        return $this->cdata->bit_gravity;
    }

    public function getWinGravity(): int
    {
        return $this->cdata->win_gravity;
    }

    public function getBackingStore(): int
    {
        return $this->cdata->backing_store;
    }

    public function getBackingPlanes(): int
    {
        return $this->cdata->backing_planes;
    }

    public function getBackingPixel(): int
    {
        return $this->cdata->backing_pixel;
    }

    public function getSaveUnder(): bool
    {
        return $this->cdata->save_under === 1;
    }

    public function getEventMask(): int
    {
        return $this->cdata->event_mask;
    }

    public function getDoNotPropagateMask(): int
    {
        return $this->cdata->do_not_propagate_mask;
    }

    public function getOverrideRedirect(): bool
    {
        return $this->cdata->override_redirect === 1;
    }

    public function getColormap(): int
    {
        return $this->cdata->colormap;
    }

    public function getCursor(): int
    {
        return $this->cdata->cursor;
    }
}
