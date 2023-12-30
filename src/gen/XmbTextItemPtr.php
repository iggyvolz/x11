<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XmbTextItemPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XmbTextItem
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XmbTextItem($this->cdata[$offset]);
    }
}
