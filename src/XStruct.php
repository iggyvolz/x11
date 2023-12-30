<?php

namespace iggyvolz\x11;

use FFI\CData;

abstract class XStruct
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public CData $cdata,
    ) {
    }
    public function ptr(): XPtr
    {
        $cls = static::class . "Ptr";
        if(!class_exists($cls)) {
            throw new \RuntimeException("Too many levels of indirection!");
        }
        return new $cls(\FFI::addr($this->cdata));
    }
}