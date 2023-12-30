<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XKeyboardStatePtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XKeyboardState
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XKeyboardState($this->cdata[$offset]);
    }
}
