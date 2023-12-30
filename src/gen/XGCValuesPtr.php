<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XGCValuesPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XGCValues
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XGCValues($this->cdata[$offset]);
    }
}
