<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XRectanglePtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XRectangle
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XRectangle($this->cdata[$offset]);
    }
}
