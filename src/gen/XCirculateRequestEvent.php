<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XCirculateRequestEvent extends XCirculateRequestEventConst
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

    public function setPlace(int $value)
    {
        $this->cdata->place = $value;
    }
}
