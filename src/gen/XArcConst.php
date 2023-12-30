<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XArcConst extends \iggyvolz\x11\XStruct
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

    public function getAngle1(): int
    {
        return $this->cdata->angle1;
    }

    public function getAngle2(): int
    {
        return $this->cdata->angle2;
    }
}
