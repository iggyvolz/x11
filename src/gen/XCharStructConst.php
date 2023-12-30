<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XCharStructConst extends \iggyvolz\x11\XStruct
{
    public function getLbearing(): int
    {
        return $this->cdata->lbearing;
    }

    public function getRbearing(): int
    {
        return $this->cdata->rbearing;
    }

    public function getWidth(): int
    {
        return $this->cdata->width;
    }

    public function getAscent(): int
    {
        return $this->cdata->ascent;
    }

    public function getDescent(): int
    {
        return $this->cdata->descent;
    }

    public function getAttributes(): int
    {
        return $this->cdata->attributes;
    }
}
