<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XGenericEventCookiePtr extends \iggyvolz\x11\XPtr
{
    public function offsetGet(mixed $offset): XGenericEventCookie
    {
        if(!is_int($offset)) throw new \LogicException();
        return new \iggyvolz\x11\gen\XGenericEventCookie($this->cdata[$offset]);
    }
}
