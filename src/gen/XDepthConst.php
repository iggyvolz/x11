<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XDepthConst extends \iggyvolz\x11\XStruct
{
    public function getDepth(): int
    {
        return $this->cdata->depth;
    }

    public function getNvisuals(): int
    {
        return $this->cdata->nvisuals;
    }

    public function getVisuals(): null|XVisualPtr
    {
        return \is_null($this->cdata->visuals) ? null : new \iggyvolz\x11\gen\XVisualPtr($this->cdata->visuals);
    }
}
