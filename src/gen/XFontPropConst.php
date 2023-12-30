<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XFontPropConst extends \iggyvolz\x11\XStruct
{
    public function getName(): int
    {
        return $this->cdata->name;
    }

    public function getCard32(): int
    {
        return $this->cdata->card32;
    }
}
