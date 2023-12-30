<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XPointPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XPoint
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XPoint($this->cdata[$offset]);
    }
}
