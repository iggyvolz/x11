<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XTimeCoordConst extends \iggyvolz\x11\XStruct
{
    public function getTime(): int
    {
        return $this->cdata->time;
    }

    public function getX(): int
    {
        return $this->cdata->x;
    }

    public function getY(): int
    {
        return $this->cdata->y;
    }
}
