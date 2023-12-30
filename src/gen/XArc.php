<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XArc extends XArcConst
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

    public function setAngle1(int $value)
    {
        $this->cdata->angle1 = $value;
    }

    public function setAngle2(int $value)
    {
        $this->cdata->angle2 = $value;
    }
}
