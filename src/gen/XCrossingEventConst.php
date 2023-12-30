<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XCrossingEventConst extends \iggyvolz\x11\XStruct
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

    public function getMode(): int
    {
        return $this->cdata->mode;
    }

    public function getDetail(): int
    {
        return $this->cdata->detail;
    }

    public function getSameScreen(): bool
    {
        return $this->cdata->same_screen === 1;
    }

    public function getFocus(): bool
    {
        return $this->cdata->focus === 1;
    }

    public function getState(): int
    {
        return $this->cdata->state;
    }
}
