<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XGraphicsExposeEventConst extends \iggyvolz\x11\XStruct
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

    public function getDrawable(): int
    {
        return $this->cdata->drawable;
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

    public function getCount(): int
    {
        return $this->cdata->count;
    }

    public function getMajorCode(): int
    {
        return $this->cdata->major_code;
    }

    public function getMinorCode(): int
    {
        return $this->cdata->minor_code;
    }
}
