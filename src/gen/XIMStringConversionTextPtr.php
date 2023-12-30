<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMStringConversionTextPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XIMStringConversionText
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XIMStringConversionText($this->cdata[$offset]);
    }
}
