<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XColorPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XColor
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XColor($this->cdata[$offset]);
    }
}
