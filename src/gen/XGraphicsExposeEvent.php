<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XGraphicsExposeEvent extends XGraphicsExposeEventConst
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

    public function setDrawable(int $value)
    {
        $this->cdata->drawable = $value;
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

    public function setCount(int $value)
    {
        $this->cdata->count = $value;
    }

    public function setMajorCode(int $value)
    {
        $this->cdata->major_code = $value;
    }

    public function setMinorCode(int $value)
    {
        $this->cdata->minor_code = $value;
    }
}
