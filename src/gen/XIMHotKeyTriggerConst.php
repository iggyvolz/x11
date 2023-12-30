<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMHotKeyTriggerConst extends \iggyvolz\x11\XStruct
{
    public function getKeysym(): int
    {
        return $this->cdata->keysym;
    }

    public function getModifier(): int
    {
        return $this->cdata->modifier;
    }

    public function getModifierMask(): int
    {
        return $this->cdata->modifier_mask;
    }
}
