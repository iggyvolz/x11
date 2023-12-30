<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XPixmapFormatValuesPtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XPixmapFormatValues
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XPixmapFormatValues($this->cdata[$offset]);
    }
}
