<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XModifierKeymapPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XModifierKeymap
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XModifierKeymap($this->cdata[$offset]);
    }
}
