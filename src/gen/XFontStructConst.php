<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XFontStructConst extends \iggyvolz\x11\XStruct
{
    public function getExtData(): null|XExtDataPtr
    {
        return \is_null($this->cdata->ext_data) ? null : new \iggyvolz\x11\gen\XExtDataPtr($this->cdata->ext_data);
    }

    public function getFid(): int
    {
        return $this->cdata->fid;
    }

    public function getDirection(): int
    {
        return $this->cdata->direction;
    }

    public function getMinCharOrByte2(): int
    {
        return $this->cdata->min_char_or_byte2;
    }

    public function getMaxCharOrByte2(): int
    {
        return $this->cdata->max_char_or_byte2;
    }

    public function getMinByte1(): int
    {
        return $this->cdata->min_byte1;
    }

    public function getMaxByte1(): int
    {
        return $this->cdata->max_byte1;
    }

    public function getAllCharsExist(): bool
    {
        return $this->cdata->all_chars_exist === 1;
    }

    public function getDefaultChar(): int
    {
        return $this->cdata->default_char;
    }

    public function getNProperties(): int
    {
        return $this->cdata->n_properties;
    }

    public function getProperties(): null|XFontPropPtr
    {
        return \is_null($this->cdata->properties) ? null : new \iggyvolz\x11\gen\XFontPropPtr($this->cdata->properties);
    }

    public function getMinBounds(): null|XCharStruct
    {
        return \is_null($this->cdata->min_bounds) ? null : new \iggyvolz\x11\gen\XCharStruct($this->cdata->min_bounds);
    }

    public function getMaxBounds(): null|XCharStruct
    {
        return \is_null($this->cdata->max_bounds) ? null : new \iggyvolz\x11\gen\XCharStruct($this->cdata->max_bounds);
    }

    public function getPerChar(): null|XCharStructPtr
    {
        return \is_null($this->cdata->per_char) ? null : new \iggyvolz\x11\gen\XCharStructPtr($this->cdata->per_char);
    }

    public function getAscent(): int
    {
        return $this->cdata->ascent;
    }

    public function getDescent(): int
    {
        return $this->cdata->descent;
    }
}
