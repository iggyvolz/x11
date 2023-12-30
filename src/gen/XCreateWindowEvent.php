<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XCreateWindowEvent extends XCreateWindowEventConst
{
    public function setType(int $value)
    {
        $this->cdata->type = $value;
    }

    public function setSerial(int $value)
    {
        $this->cdata->serial = $value;
    }

    public function setSendEvent(bool $value)
    {
        $this->cdata->send_event = $value === 1;
    }

    public function setDisplay(null|DisplayPtr $value)
    {
        $this->cdata->display = $value?->cdata;
    }

    public function setParent(int $value)
    {
        $this->cdata->parent = $value;
    }

    public function setWindow(int $value)
    {
        $this->cdata->window = $value;
    }

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

    public function setOverrideRedirect(bool $value)
    {
        $this->cdata->override_redirect = $value === 1;
    }
}
