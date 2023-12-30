<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XTimeCoordPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XTimeCoord
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XTimeCoord($this->cdata[$offset]);
    }
}
