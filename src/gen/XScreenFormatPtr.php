<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XScreenFormatPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XScreenFormat
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XScreenFormat($this->cdata[$offset]);
    }
}
