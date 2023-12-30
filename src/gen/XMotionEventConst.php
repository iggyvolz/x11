<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XMotionEventConst extends \iggyvolz\x11\XStruct
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

    public function getRoot(): int
    {
        return $this->cdata->root;
    }

    public function getSubwindow(): int
    {
        return $this->cdata->subwindow;
    }

    public function getTime(): int
    {
        return $this->cdata->time;
    }

    public function getX(): int
    {
        return $this->cdata->x;
    }

    public function getY(): int
    {
        return $this->cdata->y;
    }

    public function getXRoot(): int
    {
        return $this->cdata->x_root;
    }

    public function getYRoot(): int
    {
        return $this->cdata->y_root;
    }

    public function getState(): int
    {
        return $this->cdata->state;
    }

    public function getIsHint(): int
    {
        return $this->cdata->is_hint;
    }

    public function getSameScreen(): bool
    {
        return $this->cdata->same_screen === 1;
    }
}
