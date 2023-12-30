<?php

namespace iggyvolz\x11;

abstract class XPtr extends XStruct implements \ArrayAccess
{

    public function offsetExists(mixed $offset): bool
    {
        throw new \LogicException();
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        throw new \LogicException();
    }

    public function offsetUnset(mixed $offset): void
    {
        throw new \LogicException();
    }
}