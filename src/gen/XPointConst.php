<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XPointConst extends \iggyvolz\x11\XStruct
{
    public function getX(): int
    {
        return $this->cdata->x;
    }

    public function getY(): int
    {
        return $this->cdata->y;
    }
}
