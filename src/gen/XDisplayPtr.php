<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XDisplayPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XDisplay
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XDisplay($this->cdata[$offset]);
    }
}
