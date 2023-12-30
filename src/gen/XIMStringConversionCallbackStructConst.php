<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMStringConversionCallbackStructConst extends \iggyvolz\x11\XStruct
{
    public function getPosition(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getDirection(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getOperation(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getFactor(): int
    {
        return $this->cdata->factor;
    }

    public function getText(): null|XIMStringConversionTextPtr
    {
        return \is_null($this->cdata->text) ? null : new \iggyvolz\x11\gen\XIMStringConversionTextPtr($this->cdata->text);
    }
}
