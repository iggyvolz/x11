<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XHostAddressPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XHostAddress
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XHostAddress($this->cdata[$offset]);
    }
}
