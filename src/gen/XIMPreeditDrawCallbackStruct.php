<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMPreeditDrawCallbackStruct extends XIMPreeditDrawCallbackStructConst
{
    public function setCaret(int $value)
    {
        $this->cdata->caret = $value;
    }

    public function setChgFirst(int $value)
    {
        $this->cdata->chg_first = $value;
    }

    public function setChgLength(int $value)
    {
        $this->cdata->chg_length = $value;
    }

    public function setText(null|XIMTextPtr $value)
    {
        $this->cdata->text = $value?->cdata;
    }
}
