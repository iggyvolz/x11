<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XSegmentPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XSegment
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XSegment($this->cdata[$offset]);
    }
}
