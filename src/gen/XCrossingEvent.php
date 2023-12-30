<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XCrossingEvent extends XCrossingEventConst
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

    public function setWindow(int $value)
    {
        $this->cdata->window = $value;
    }

    public function setRoot(int $value)
    {
        $this->cdata->root = $value;
    }

    public function setSubwindow(int $value)
    {
        $this->cdata->subwindow = $value;
    }

    public function setTime(int $value)
    {
        $this->cdata->time = $value;
    }

    public function setX(int $value)
    {
        $this->cdata->x = $value;
    }

    public function setY(int $value)
    {
        $this->cdata->y = $value;
    }

    public function setXRoot(int $value)
    {
        $this->cdata->x_root = $value;
    }

    public function setYRoot(int $value)
    {
        $this->cdata->y_root = $value;
    }

    public function setMode(int $value)
    {
        $this->cdata->mode = $value;
    }

    public function setDetail(int $value)
    {
        $this->cdata->detail = $value;
    }

    public function setSameScreen(bool $value)
    {
        $this->cdata->same_screen = $value === 1;
    }

    public function setFocus(bool $value)
    {
        $this->cdata->focus = $value === 1;
    }

    public function setState(int $value)
    {
        $this->cdata->state = $value;
    }
}
