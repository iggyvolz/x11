<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XPoint extends XPointConst
{
    public function setX(int $value)
    {
        $this->cdata->x = $value;
    }

    public function setY(int $value)
    {
        $this->cdata->y = $value;
    }
}
