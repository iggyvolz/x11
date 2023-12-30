<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XTimeCoord extends XTimeCoordConst
{
    public function setTime(int $value)
    {
        $this->cdata->time = $value;
    }

    public function setX(int $value)
    {
        $this->cdata->x = $value;
    }

    public function setY(int $value)
    {
        $this->cdata->y = $value;
    }
}
