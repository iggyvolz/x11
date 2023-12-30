<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMStyles extends XIMStylesConst
{
    public function setCountStyles(int $value)
    {
        $this->cdata->count_styles = $value;
    }
}
