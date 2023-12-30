<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XErrorEventConst extends \iggyvolz\x11\XStruct
{
    public function getType(): int
    {
        return $this->cdata->type;
    }

    public function getDisplay(): null|DisplayPtr
    {
        return \is_null($this->cdata->display) ? null : new \iggyvolz\x11\gen\DisplayPtr($this->cdata->display);
    }

    public function getResourceid(): int
    {
        return $this->cdata->resourceid;
    }

    public function getSerial(): int
    {
        return $this->cdata->serial;
    }

    public function getErrorCode(): int
    {
        return $this->cdata->error_code;
    }

    public function getRequestCode(): int
    {
        return $this->cdata->request_code;
    }

    public function getMinorCode(): int
    {
        return $this->cdata->minor_code;
    }
}
