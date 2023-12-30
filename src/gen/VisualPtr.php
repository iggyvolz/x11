<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class VisualPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): Visual
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\Visual($this->cdata[$offset]);
    }
}
