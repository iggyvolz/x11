<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XKeyboardControlPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XKeyboardControl
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XKeyboardControl($this->cdata[$offset]);
    }
}
