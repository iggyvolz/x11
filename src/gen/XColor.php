<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XColor extends XColorConst
{
    public function setPixel(int $value)
    {
        $this->cdata->pixel = $value;
    }

    public function setRed(int $value)
    {
        $this->cdata->red = $value;
    }

    public function setGreen(int $value)
    {
        $this->cdata->green = $value;
    }

    public function setBlue(int $value)
    {
        $this->cdata->blue = $value;
    }

    public function setFlags(int $value)
    {
        $this->cdata->flags = $value;
    }

    public function setPad(int $value)
    {
        $this->cdata->pad = $value;
    }
}
