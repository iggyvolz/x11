<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XExtDataPtrPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XExtDataPtr
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XExtDataPtr($this->cdata[$offset]);
    }
}
