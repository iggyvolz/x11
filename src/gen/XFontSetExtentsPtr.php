<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XFontSetExtentsPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XFontSetExtents
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XFontSetExtents($this->cdata[$offset]);
    }
}
