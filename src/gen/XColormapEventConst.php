<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XColormapEventConst extends \iggyvolz\x11\XStruct
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

    public function getColormap(): int
    {
        return $this->cdata->colormap;
    }

    public function getNew(): bool
    {
        return $this->cdata->new === 1;
    }

    public function getState(): int
    {
        return $this->cdata->state;
    }
}
