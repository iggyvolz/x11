<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XSetWindowAttributesPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XSetWindowAttributes
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XSetWindowAttributes($this->cdata[$offset]);
    }
}
