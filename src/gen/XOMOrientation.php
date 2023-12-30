<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XOMOrientation extends XOMOrientationConst
{
    public function setNumOrientation(int $value)
    {
        $this->cdata->num_orientation = $value;
    }
}
