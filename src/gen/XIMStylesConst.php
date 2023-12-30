<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMStylesConst extends \iggyvolz\x11\XStruct
{
    public function getCountStyles(): int
    {
        return $this->cdata->count_styles;
    }

    public function getSupportedStyles(): never
    {
        throw new \LogicException('Not yet implemented');
    }
}
