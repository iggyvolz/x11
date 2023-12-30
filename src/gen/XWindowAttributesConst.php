<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XWindowAttributesConst extends \iggyvolz\x11\XStruct
{
    public function getX(): int
    {
        return $this->cdata->x;
    }

    public function getY(): int
    {
        return $this->cdata->y;
    }

    public function getWidth(): int
    {
        return $this->cdata->width;
    }

    public function getHeight(): int
    {
        return $this->cdata->height;
    }

    public function getBorderWidth(): int
    {
        return $this->cdata->border_width;
    }

    public function getDepth(): int
    {
        return $this->cdata->depth;
    }

    public function getVisual(): null|VisualPtr
    {
        return \is_null($this->cdata->visual) ? null : new \iggyvolz\x11\gen\VisualPtr($this->cdata->visual);
    }

    public function getRoot(): int
    {
        return $this->cdata->root;
    }

    public function getClass(): int
    {
        return $this->cdata->class;
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

    public function getColormap(): int
    {
        return $this->cdata->colormap;
    }

    public function getMapInstalled(): bool
    {
        return $this->cdata->map_installed === 1;
    }

    public function getMapState(): int
    {
        return $this->cdata->map_state;
    }

    public function getAllEventMasks(): int
    {
        return $this->cdata->all_event_masks;
    }

    public function getYourEventMask(): int
    {
        return $this->cdata->your_event_mask;
    }

    public function getDoNotPropagateMask(): int
    {
        return $this->cdata->do_not_propagate_mask;
    }

    public function getOverrideRedirect(): bool
    {
        return $this->cdata->override_redirect === 1;
    }

    public function getScreen(): null|ScreenPtr
    {
        return \is_null($this->cdata->screen) ? null : new \iggyvolz\x11\gen\ScreenPtr($this->cdata->screen);
    }
}
