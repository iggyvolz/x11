<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class Depth extends DepthConst
{
    public function setDepth(int $value)
    {
        $this->cdata->depth = $value;
    }

    public function setNvisuals(int $value)
    {
        $this->cdata->nvisuals = $value;
    }

    public function setVisuals(null|VisualPtr $value)
    {
        $this->cdata->visuals = $value?->cdata;
    }
}
