<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMTextPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XIMText
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XIMText($this->cdata[$offset]);
    }
}
