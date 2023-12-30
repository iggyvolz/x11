<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class ScreenPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): Screen
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\Screen($this->cdata[$offset]);
    }
}
