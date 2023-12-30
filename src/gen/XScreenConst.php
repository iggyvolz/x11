<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XScreenConst extends \iggyvolz\x11\XStruct
{
    public function getExtData(): null|XExtDataPtr
    {
        return \is_null($this->cdata->ext_data) ? null : new \iggyvolz\x11\gen\XExtDataPtr($this->cdata->ext_data);
    }

    public function getDisplay(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getRoot(): int
    {
        return $this->cdata->root;
    }

    public function getWidth(): int
    {
        return $this->cdata->width;
    }

    public function getHeight(): int
    {
        return $this->cdata->height;
    }

    public function getMwidth(): int
    {
        return $this->cdata->mwidth;
    }

    public function getMheight(): int
    {
        return $this->cdata->mheight;
    }

    public function getNdepths(): int
    {
        return $this->cdata->ndepths;
    }

    public function getDepths(): null|XDepthPtr
    {
        return \is_null($this->cdata->depths) ? null : new \iggyvolz\x11\gen\XDepthPtr($this->cdata->depths);
    }

    public function getRootDepth(): int
    {
        return $this->cdata->root_depth;
    }

    public function getRootVisual(): null|XVisualPtr
    {
        return \is_null($this->cdata->root_visual) ? null : new \iggyvolz\x11\gen\XVisualPtr($this->cdata->root_visual);
    }

    public function getDefaultGc(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getCmap(): int
    {
        return $this->cdata->cmap;
    }

    public function getWhitePixel(): int
    {
        return $this->cdata->white_pixel;
    }

    public function getBlackPixel(): int
    {
        return $this->cdata->black_pixel;
    }

    public function getMaxMaps(): int
    {
        return $this->cdata->max_maps;
    }

    public function getMinMaps(): int
    {
        return $this->cdata->min_maps;
    }

    public function getBackingStore(): int
    {
        return $this->cdata->backing_store;
    }

    public function getSaveUnders(): bool
    {
        return $this->cdata->save_unders === 1;
    }

    public function getRootInputMask(): int
    {
        return $this->cdata->root_input_mask;
    }
}
