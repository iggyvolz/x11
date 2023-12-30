<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XWindowChanges extends XWindowChangesConst
{
    public function setX(int $value)
    {
        $this->cdata->x = $value;
    }

    public function setY(int $value)
    {
        $this->cdata->y = $value;
    }

    public function setWidth(int $value)
    {
        $this->cdata->width = $value;
    }

    public function setHeight(int $value)
    {
        $this->cdata->height = $value;
    }

    public function setBorderWidth(int $value)
    {
        $this->cdata->border_width = $value;
    }

    public function setSibling(int $value)
    {
        $this->cdata->sibling = $value;
    }

    public function setStackMode(int $value)
    {
        $this->cdata->stack_mode = $value;
    }
}
