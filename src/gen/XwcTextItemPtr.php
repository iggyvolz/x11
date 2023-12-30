<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XwcTextItemPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XwcTextItem
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XwcTextItem($this->cdata[$offset]);
    }
}
