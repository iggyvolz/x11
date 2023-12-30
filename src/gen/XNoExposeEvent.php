<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XNoExposeEvent extends XNoExposeEventConst
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

    public function setDrawable(int $value)
    {
        $this->cdata->drawable = $value;
    }

    public function setMajorCode(int $value)
    {
        $this->cdata->major_code = $value;
    }

    public function setMinorCode(int $value)
    {
        $this->cdata->minor_code = $value;
    }
}
