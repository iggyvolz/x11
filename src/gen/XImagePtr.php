<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XImagePtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XImage
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XImage($this->cdata[$offset]);
    }
}
