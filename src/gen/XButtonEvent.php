<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XButtonEvent extends XButtonEventConst
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

    public function setState(int $value)
    {
        $this->cdata->state = $value;
    }

    public function setButton(int $value)
    {
        $this->cdata->button = $value;
    }

    public function setSameScreen(bool $value)
    {
        $this->cdata->same_screen = $value === 1;
    }
}
