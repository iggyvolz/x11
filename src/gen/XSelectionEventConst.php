<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XSelectionEventConst extends \iggyvolz\x11\XStruct
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

    public function getRequestor(): int
    {
        return $this->cdata->requestor;
    }

    public function getSelection(): int
    {
        return $this->cdata->selection;
    }

    public function getTarget(): int
    {
        return $this->cdata->target;
    }

    public function getProperty(): int
    {
        return $this->cdata->property;
    }

    public function getTime(): int
    {
        return $this->cdata->time;
    }
}
