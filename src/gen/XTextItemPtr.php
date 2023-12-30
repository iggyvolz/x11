<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XTextItemPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XTextItem
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XTextItem($this->cdata[$offset]);
    }
}
