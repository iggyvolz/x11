<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XMappingEventPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XMappingEvent
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XMappingEvent($this->cdata[$offset]);
    }
}
