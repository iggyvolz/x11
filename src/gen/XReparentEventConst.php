<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XReparentEventConst extends \iggyvolz\x11\XStruct
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

    public function getEvent(): int
    {
        return $this->cdata->event;
    }

    public function getWindow(): int
    {
        return $this->cdata->window;
    }

    public function getParent(): int
    {
        return $this->cdata->parent;
    }

    public function getX(): int
    {
        return $this->cdata->x;
    }

    public function getY(): int
    {
        return $this->cdata->y;
    }

    public function getOverrideRedirect(): bool
    {
        return $this->cdata->override_redirect === 1;
    }
}
