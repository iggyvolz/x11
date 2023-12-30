<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XEvent extends XEventConst
{
    public function setType(int $value)
    {
        $this->cdata->type = $value;
    }
}
