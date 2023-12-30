<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XFontStructPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XFontStruct
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XFontStruct($this->cdata[$offset]);
    }
}
