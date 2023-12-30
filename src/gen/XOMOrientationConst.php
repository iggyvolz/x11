<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XOMOrientationConst extends \iggyvolz\x11\XStruct
{
    public function getNumOrientation(): int
    {
        return $this->cdata->num_orientation;
    }

    public function getOrientation(): never
    {
        throw new \LogicException('Not yet implemented');
    }
}
