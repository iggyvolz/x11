<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XMappingEvent extends XMappingEventConst
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

    public function setRequest(int $value)
    {
        $this->cdata->request = $value;
    }

    public function setFirstKeycode(int $value)
    {
        $this->cdata->first_keycode = $value;
    }

    public function setCount(int $value)
    {
        $this->cdata->count = $value;
    }
}
