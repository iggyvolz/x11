<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMPreeditCaretCallbackStruct extends XIMPreeditCaretCallbackStructConst
{
    public function setPosition(int $value)
    {
        $this->cdata->position = $value;
    }
}
