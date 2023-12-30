<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XOMCharSetListConst extends \iggyvolz\x11\XStruct
{
    public function getCharsetCount(): int
    {
        return $this->cdata->charset_count;
    }

    public function getCharsetList(): never
    {
        throw new \LogicException('Not yet implemented');
    }
}
