<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XCharStructPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XCharStruct
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XCharStruct($this->cdata[$offset]);
    }
}
