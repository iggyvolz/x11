<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class ScreenFormatPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): ScreenFormat
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\ScreenFormat($this->cdata[$offset]);
    }
}
