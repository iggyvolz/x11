<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMValuesListConst extends \iggyvolz\x11\XStruct
{
    public function getCountValues(): int
    {
        return $this->cdata->count_values;
    }

    public function getSupportedValues(): never
    {
        throw new \LogicException('Not yet implemented');
    }
}
