<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XReparentEvent extends XReparentEventConst
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

    public function setEvent(int $value)
    {
        $this->cdata->event = $value;
    }

    public function setWindow(int $value)
    {
        $this->cdata->window = $value;
    }

    public function setParent(int $value)
    {
        $this->cdata->parent = $value;
    }

    public function setX(int $value)
    {
        $this->cdata->x = $value;
    }

    public function setY(int $value)
    {
        $this->cdata->y = $value;
    }

    public function setOverrideRedirect(bool $value)
    {
        $this->cdata->override_redirect = $value === 1;
    }
}
