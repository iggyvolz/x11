<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XSegment extends XSegmentConst
{
    public function setX1(int $value)
    {
        $this->cdata->x1 = $value;
    }

    public function setY1(int $value)
    {
        $this->cdata->y1 = $value;
    }

    public function setX2(int $value)
    {
        $this->cdata->x2 = $value;
    }

    public function setY2(int $value)
    {
        $this->cdata->y2 = $value;
    }
}
