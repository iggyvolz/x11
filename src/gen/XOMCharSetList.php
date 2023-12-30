<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XOMCharSetList extends XOMCharSetListConst
{
    public function setCharsetCount(int $value)
    {
        $this->cdata->charset_count = $value;
    }
}
