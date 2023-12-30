<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMPreeditCaretCallbackStructConst extends \iggyvolz\x11\XStruct
{
    public function getPosition(): int
    {
        return $this->cdata->position;
    }

    public function getDirection(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getStyle(): never
    {
        throw new \LogicException('Not yet implemented');
    }
}
