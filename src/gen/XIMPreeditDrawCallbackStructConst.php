<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMPreeditDrawCallbackStructConst extends \iggyvolz\x11\XStruct
{
    public function getCaret(): int
    {
        return $this->cdata->caret;
    }

    public function getChgFirst(): int
    {
        return $this->cdata->chg_first;
    }

    public function getChgLength(): int
    {
        return $this->cdata->chg_length;
    }

    public function getText(): null|XIMTextPtr
    {
        return \is_null($this->cdata->text) ? null : new \iggyvolz\x11\gen\XIMTextPtr($this->cdata->text);
    }
}
