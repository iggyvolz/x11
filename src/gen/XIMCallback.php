<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMCallback extends XIMCallbackConst
{
    public function setClientData(null|\FFI\CData $value)
    {
        $this->cdata->client_data = $value;
    }
}
