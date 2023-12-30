<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XConfigureRequestEventConst extends \iggyvolz\x11\XStruct
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

    public function getParent(): int
    {
        return $this->cdata->parent;
    }

    public function getWindow(): int
    {
        return $this->cdata->window;
    }

    public function getX(): int
    {
        return $this->cdata->x;
    }

    public function getY(): int
    {
        return $this->cdata->y;
    }

    public function getWidth(): int
    {
        return $this->cdata->width;
    }

    public function getHeight(): int
    {
        return $this->cdata->height;
    }

    public function getBorderWidth(): int
    {
        return $this->cdata->border_width;
    }

    public function getAbove(): int
    {
        return $this->cdata->above;
    }

    public function getDetail(): int
    {
        return $this->cdata->detail;
    }

    public function getValueMask(): int
    {
        return $this->cdata->value_mask;
    }
}
