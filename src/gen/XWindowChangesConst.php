<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XWindowChangesConst extends \iggyvolz\x11\XStruct
{
    public function getX(): int
    {
        return $this->cdata->x;
    }

    public function getY(): int
    {
        return $this->cdata->y;
    }

    public function getWidth(): int
    {
        return $this->cdata->width;
    }

    public function getHeight(): int
    {
        return $this->cdata->height;
    }

    public function getBorderWidth(): int
    {
        return $this->cdata->border_width;
    }

    public function getSibling(): int
    {
        return $this->cdata->sibling;
    }

    public function getStackMode(): int
    {
        return $this->cdata->stack_mode;
    }
}
