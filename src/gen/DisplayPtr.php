<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class DisplayPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): Display
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\Display($this->cdata[$offset]);
    }
}
