<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XEventPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XEvent
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XEvent($this->cdata[$offset]);
    }
}
