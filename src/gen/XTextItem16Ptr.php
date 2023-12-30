<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XTextItem16Ptr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XTextItem16
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XTextItem16($this->cdata[$offset]);
    }
}
