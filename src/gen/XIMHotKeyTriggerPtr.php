<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMHotKeyTriggerPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XIMHotKeyTrigger
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XIMHotKeyTrigger($this->cdata[$offset]);
    }
}
