<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XFocusChangeEvent extends XFocusChangeEventConst
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

    public function setMode(int $value)
    {
        $this->cdata->mode = $value;
    }

    public function setDetail(int $value)
    {
        $this->cdata->detail = $value;
    }
}
