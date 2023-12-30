<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XGenericEventCookieConst extends \iggyvolz\x11\XStruct
{
    public function getType(): int
    {
        return $this->cdata->type;
    }

    public function getSerial(): int
    {
        return $this->cdata->serial;
    }

    public function getSendEvent(): bool
    {
        return $this->cdata->send_event === 1;
    }

    public function getDisplay(): null|DisplayPtr
    {
        return \is_null($this->cdata->display) ? null : new \iggyvolz\x11\gen\DisplayPtr($this->cdata->display);
    }

    public function getExtension(): int
    {
        return $this->cdata->extension;
    }

    public function getEvtype(): int
    {
        return $this->cdata->evtype;
    }

    public function getCookie(): int
    {
        return $this->cdata->cookie;
    }

    public function getData(): null|\FFI\CData
    {
        return $this->cdata->data;
    }
}
