<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XModifierKeymapConst extends \iggyvolz\x11\XStruct
{
    public function getMaxKeypermod(): int
    {
        return $this->cdata->max_keypermod;
    }

    public function getModifiermap(): never
    {
        throw new \LogicException('Not yet implemented');
    }
}
