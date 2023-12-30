<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMValuesList extends XIMValuesListConst
{
    public function setCountValues(int $value)
    {
        $this->cdata->count_values = $value;
    }
}
