<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XFontStructPtrPtrPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XFontStructPtrPtr
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XFontStructPtrPtr($this->cdata[$offset]);
    }
}
