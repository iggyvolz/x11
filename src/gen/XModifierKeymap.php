<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XModifierKeymap extends XModifierKeymapConst
{
    public function setMaxKeypermod(int $value)
    {
        $this->cdata->max_keypermod = $value;
    }
}
