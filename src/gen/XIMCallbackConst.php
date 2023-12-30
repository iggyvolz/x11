<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMCallbackConst extends \iggyvolz\x11\XStruct
{
    public function getClientData(): null|\FFI\CData
    {
        return $this->cdata->client_data;
    }

    public function getCallback(): never
    {
        throw new \LogicException('Not yet implemented');
    }
}
