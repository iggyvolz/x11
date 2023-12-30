<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XSegmentConst extends \iggyvolz\x11\XStruct
{
    public function getX1(): int
    {
        return $this->cdata->x1;
    }

    public function getY1(): int
    {
        return $this->cdata->y1;
    }

    public function getX2(): int
    {
        return $this->cdata->x2;
    }

    public function getY2(): int
    {
        return $this->cdata->y2;
    }
}
