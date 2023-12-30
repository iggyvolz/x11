<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XIMStringConversionTextConst extends \iggyvolz\x11\XStruct
{
    public function getLength(): int
    {
        return $this->cdata->length;
    }

    public function getFeedback(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getEncodingIsWchar(): bool
    {
        return $this->cdata->encoding_is_wchar === 1;
    }

    public function getString(): null|IMString
    {
        return \is_null($this->cdata->string) ? null : new \iggyvolz\x11\gen\IMString($this->cdata->string);
    }
}
