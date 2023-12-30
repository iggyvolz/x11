<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XwcTextItem extends XwcTextItemConst
{
    public function setNchars(int $value)
    {
        $this->cdata->nchars = $value;
    }

    public function setDelta(int $value)
    {
        $this->cdata->delta = $value;
    }
}
