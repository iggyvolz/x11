<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XGenericEventCookie extends XGenericEventCookieConst
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

    public function setExtension(int $value)
    {
        $this->cdata->extension = $value;
    }

    public function setEvtype(int $value)
    {
        $this->cdata->evtype = $value;
    }

    public function setCookie(int $value)
    {
        $this->cdata->cookie = $value;
    }

    public function setData(null|\FFI\CData $value)
    {
        $this->cdata->data = $value;
    }
}
