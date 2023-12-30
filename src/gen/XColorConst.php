<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XColorConst extends \iggyvolz\x11\XStruct
{
    public function getPixel(): int
    {
        return $this->cdata->pixel;
    }

    public function getRed(): int
    {
        return $this->cdata->red;
    }

    public function getGreen(): int
    {
        return $this->cdata->green;
    }

    public function getBlue(): int
    {
        return $this->cdata->blue;
    }

    public function getFlags(): int
    {
        return $this->cdata->flags;
    }

    public function getPad(): int
    {
        return $this->cdata->pad;
    }
}
