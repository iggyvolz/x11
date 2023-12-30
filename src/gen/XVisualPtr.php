<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XVisualPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XVisual
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XVisual($this->cdata[$offset]);
    }
}
