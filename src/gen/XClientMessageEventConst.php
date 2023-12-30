<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XClientMessageEventConst extends \iggyvolz\x11\XStruct
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

    public function getWindow(): int
    {
        return $this->cdata->window;
    }

    public function getMessageType(): int
    {
        return $this->cdata->message_type;
    }

    public function getFormat(): int
    {
        return $this->cdata->format;
    }

    public function getData(): null|ClientEventData
    {
        return \is_null($this->cdata->data) ? null : new \iggyvolz\x11\gen\ClientEventData($this->cdata->data);
    }
}
