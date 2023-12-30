<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XScreenPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XScreen
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XScreen($this->cdata[$offset]);
    }
}
