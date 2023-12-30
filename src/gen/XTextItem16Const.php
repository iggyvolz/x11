<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XTextItem16Const extends \iggyvolz\x11\XStruct
{
    public function getChars(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getNchars(): int
    {
        return $this->cdata->nchars;
    }

    public function getDelta(): int
    {
        return $this->cdata->delta;
    }

    public function getFont(): int
    {
        return $this->cdata->font;
    }
}
