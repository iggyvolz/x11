<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XWindowChangesPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XWindowChanges
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XWindowChanges($this->cdata[$offset]);
    }
}
