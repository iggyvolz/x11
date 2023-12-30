<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class DepthPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): Depth
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\Depth($this->cdata[$offset]);
    }
}
