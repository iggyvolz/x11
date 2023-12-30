<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XFontStruct extends XFontStructConst
{
    public function setExtData(null|XExtDataPtr $value)
    {
        $this->cdata->ext_data = $value?->cdata;
    }

    public function setFid(int $value)
    {
        $this->cdata->fid = $value;
    }

    public function setDirection(int $value)
    {
        $this->cdata->direction = $value;
    }

    public function setMinCharOrByte2(int $value)
    {
        $this->cdata->min_char_or_byte2 = $value;
    }

    public function setMaxCharOrByte2(int $value)
    {
        $this->cdata->max_char_or_byte2 = $value;
    }

    public function setMinByte1(int $value)
    {
        $this->cdata->min_byte1 = $value;
    }

    public function setMaxByte1(int $value)
    {
        $this->cdata->max_byte1 = $value;
    }

    public function setAllCharsExist(bool $value)
    {
        $this->cdata->all_chars_exist = $value === 1;
    }

    public function setDefaultChar(int $value)
    {
        $this->cdata->default_char = $value;
    }

    public function setNProperties(int $value)
    {
        $this->cdata->n_properties = $value;
    }

    public function setProperties(null|XFontPropPtr $value)
    {
        $this->cdata->properties = $value?->cdata;
    }

    public function setPerChar(null|XCharStructPtr $value)
    {
        $this->cdata->per_char = $value?->cdata;
    }

    public function setAscent(int $value)
    {
        $this->cdata->ascent = $value;
    }

    public function setDescent(int $value)
    {
        $this->cdata->descent = $value;
    }
}
