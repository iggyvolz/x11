<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XTextItem16 extends XTextItem16Const
{
    public function setNchars(int $value)
    {
        $this->cdata->nchars = $value;
    }

    public function setDelta(int $value)
    {
        $this->cdata->delta = $value;
    }

    public function setFont(int $value)
    {
        $this->cdata->font = $value;
    }
}
