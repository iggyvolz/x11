<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XCharStruct extends XCharStructConst
{
    public function setLbearing(int $value)
    {
        $this->cdata->lbearing = $value;
    }

    public function setRbearing(int $value)
    {
        $this->cdata->rbearing = $value;
    }

    public function setWidth(int $value)
    {
        $this->cdata->width = $value;
    }

    public function setAscent(int $value)
    {
        $this->cdata->ascent = $value;
    }

    public function setDescent(int $value)
    {
        $this->cdata->descent = $value;
    }

    public function setAttributes(int $value)
    {
        $this->cdata->attributes = $value;
    }
}
