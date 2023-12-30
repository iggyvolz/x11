<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XExtDataPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XExtData
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XExtData($this->cdata[$offset]);
    }
}
