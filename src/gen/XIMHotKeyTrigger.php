<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMHotKeyTrigger extends XIMHotKeyTriggerConst
{
    public function setKeysym(int $value)
    {
        $this->cdata->keysym = $value;
    }

    public function setModifier(int $value)
    {
        $this->cdata->modifier = $value;
    }

    public function setModifierMask(int $value)
    {
        $this->cdata->modifier_mask = $value;
    }
}
