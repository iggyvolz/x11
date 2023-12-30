<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XFontPropPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XFontProp
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XFontProp($this->cdata[$offset]);
    }
}
