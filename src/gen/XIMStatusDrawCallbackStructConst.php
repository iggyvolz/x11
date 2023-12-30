<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMStatusDrawCallbackStructConst extends \iggyvolz\x11\XStruct
{
    public function getType(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getData(): null|TextOrBitmap
    {
        return \is_null($this->cdata->data) ? null : new \iggyvolz\x11\gen\TextOrBitmap($this->cdata->data);
    }
}
