<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XWindowAttributesPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XWindowAttributes
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XWindowAttributes($this->cdata[$offset]);
    }
}
