<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XScreen extends XScreenConst
{
    public function setExtData(null|XExtDataPtr $value)
    {
        $this->cdata->ext_data = $value?->cdata;
    }

    public function setRoot(int $value)
    {
        $this->cdata->root = $value;
    }

    public function setWidth(int $value)
    {
        $this->cdata->width = $value;
    }

    public function setHeight(int $value)
    {
        $this->cdata->height = $value;
    }

    public function setMwidth(int $value)
    {
        $this->cdata->mwidth = $value;
    }

    public function setMheight(int $value)
    {
        $this->cdata->mheight = $value;
    }

    public function setNdepths(int $value)
    {
        $this->cdata->ndepths = $value;
    }

    public function setDepths(null|XDepthPtr $value)
    {
        $this->cdata->depths = $value?->cdata;
    }

    public function setRootDepth(int $value)
    {
        $this->cdata->root_depth = $value;
    }

    public function setRootVisual(null|XVisualPtr $value)
    {
        $this->cdata->root_visual = $value?->cdata;
    }

    public function setCmap(int $value)
    {
        $this->cdata->cmap = $value;
    }

    public function setWhitePixel(int $value)
    {
        $this->cdata->white_pixel = $value;
    }

    public function setBlackPixel(int $value)
    {
        $this->cdata->black_pixel = $value;
    }

    public function setMaxMaps(int $value)
    {
        $this->cdata->max_maps = $value;
    }

    public function setMinMaps(int $value)
    {
        $this->cdata->min_maps = $value;
    }

    public function setBackingStore(int $value)
    {
        $this->cdata->backing_store = $value;
    }

    public function setSaveUnders(bool $value)
    {
        $this->cdata->save_unders = $value === 1;
    }

    public function setRootInputMask(int $value)
    {
        $this->cdata->root_input_mask = $value;
    }
}
