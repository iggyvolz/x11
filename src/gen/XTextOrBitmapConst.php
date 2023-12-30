<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XTextOrBitmapConst extends \iggyvolz\x11\XStruct
{
    public function getText(): null|XIMTextPtr
    {
        return \is_null($this->cdata->text) ? null : new \iggyvolz\x11\gen\XIMTextPtr($this->cdata->text);
    }

    public function getBitmap(): int
    {
        return $this->cdata->bitmap;
    }
}
