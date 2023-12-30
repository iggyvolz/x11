<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XColormapEvent extends XColormapEventConst
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

    public function setWindow(int $value)
    {
        $this->cdata->window = $value;
    }

    public function setColormap(int $value)
    {
        $this->cdata->colormap = $value;
    }

    public function setNew(bool $value)
    {
        $this->cdata->new = $value === 1;
    }

    public function setState(int $value)
    {
        $this->cdata->state = $value;
    }
}
