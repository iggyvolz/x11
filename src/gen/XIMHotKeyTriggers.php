<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMHotKeyTriggers extends XIMHotKeyTriggersConst
{
    public function setNumHotKey(int $value)
    {
        $this->cdata->num_hot_key = $value;
    }

    public function setKey(null|XIMHotKeyTriggerPtr $value)
    {
        $this->cdata->key = $value?->cdata;
    }
}
