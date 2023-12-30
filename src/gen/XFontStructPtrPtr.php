<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XFontStructPtrPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XFontStructPtr
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XFontStructPtr($this->cdata[$offset]);
    }
}
