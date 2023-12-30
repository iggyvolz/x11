<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XErrorEvent extends XErrorEventConst
{
    public function setType(int $value)
    {
        $this->cdata->type = $value;
    }

    public function setDisplay(null|DisplayPtr $value)
    {
        $this->cdata->display = $value?->cdata;
    }

    public function setResourceid(int $value)
    {
        $this->cdata->resourceid = $value;
    }

    public function setSerial(int $value)
    {
        $this->cdata->serial = $value;
    }

    public function setErrorCode(int $value)
    {
        $this->cdata->error_code = $value;
    }

    public function setRequestCode(int $value)
    {
        $this->cdata->request_code = $value;
    }

    public function setMinorCode(int $value)
    {
        $this->cdata->minor_code = $value;
    }
}
