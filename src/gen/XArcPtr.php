<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XArcPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XArc
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XArc($this->cdata[$offset]);
    }
}
