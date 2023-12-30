<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMHotKeyTriggersConst extends \iggyvolz\x11\XStruct
{
    public function getNumHotKey(): int
    {
        return $this->cdata->num_hot_key;
    }

    public function getKey(): null|XIMHotKeyTriggerPtr
    {
        return \is_null($this->cdata->key) ? null : new \iggyvolz\x11\gen\XIMHotKeyTriggerPtr($this->cdata->key);
    }
}
