<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XDepthPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XDepth
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XDepth($this->cdata[$offset]);
    }
}
