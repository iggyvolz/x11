<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XWindowAttributes extends XWindowAttributesConst
{
    public function setX(int $value)
    {
        $this->cdata->x = $value;
    }

    public function setY(int $value)
    {
        $this->cdata->y = $value;
    }

    public function setWidth(int $value)
    {
        $this->cdata->width = $value;
    }

    public function setHeight(int $value)
    {
        $this->cdata->height = $value;
    }

    public function setBorderWidth(int $value)
    {
        $this->cdata->border_width = $value;
    }

    public function setDepth(int $value)
    {
        $this->cdata->depth = $value;
    }

    public function setVisual(null|VisualPtr $value)
    {
        $this->cdata->visual = $value?->cdata;
    }

    public function setRoot(int $value)
    {
        $this->cdata->root = $value;
    }

    public function setClass(int $value)
    {
        $this->cdata->class = $value;
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

    public function setColormap(int $value)
    {
        $this->cdata->colormap = $value;
    }

    public function setMapInstalled(bool $value)
    {
        $this->cdata->map_installed = $value === 1;
    }

    public function setMapState(int $value)
    {
        $this->cdata->map_state = $value;
    }

    public function setAllEventMasks(int $value)
    {
        $this->cdata->all_event_masks = $value;
    }

    public function setYourEventMask(int $value)
    {
        $this->cdata->your_event_mask = $value;
    }

    public function setDoNotPropagateMask(int $value)
    {
        $this->cdata->do_not_propagate_mask = $value;
    }

    public function setOverrideRedirect(bool $value)
    {
        $this->cdata->override_redirect = $value === 1;
    }

    public function setScreen(null|ScreenPtr $value)
    {
        $this->cdata->screen = $value?->cdata;
    }
}
