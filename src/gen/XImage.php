<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XImage extends XImageConst
{
    public function setWidth(int $value)
    {
        $this->cdata->width = $value;
    }

    public function setHeight(int $value)
    {
        $this->cdata->height = $value;
    }

    public function setXoffset(int $value)
    {
        $this->cdata->xoffset = $value;
    }

    public function setFormat(int $value)
    {
        $this->cdata->format = $value;
    }

    public function setByteOrder(int $value)
    {
        $this->cdata->byte_order = $value;
    }

    public function setBitmapUnit(int $value)
    {
        $this->cdata->bitmap_unit = $value;
    }

    public function setBitmapBitOrder(int $value)
    {
        $this->cdata->bitmap_bit_order = $value;
    }

    public function setBitmapPad(int $value)
    {
        $this->cdata->bitmap_pad = $value;
    }

    public function setDepth(int $value)
    {
        $this->cdata->depth = $value;
    }

    public function setBytesPerLine(int $value)
    {
        $this->cdata->bytes_per_line = $value;
    }

    public function setBitsPerPixel(int $value)
    {
        $this->cdata->bits_per_pixel = $value;
    }

    public function setRedMask(int $value)
    {
        $this->cdata->red_mask = $value;
    }

    public function setGreenMask(int $value)
    {
        $this->cdata->green_mask = $value;
    }

    public function setBlueMask(int $value)
    {
        $this->cdata->blue_mask = $value;
    }

    public function setObdata(null|\FFI\CData $value)
    {
        $this->cdata->obdata = $value;
    }

    public function setCreateImage(null|\FFI\CData $value)
    {
        $this->cdata->create_image = $value;
    }

    public function setDestroyImage(null|\FFI\CData $value)
    {
        $this->cdata->destroy_image = $value;
    }

    public function setGetPixel(null|\FFI\CData $value)
    {
        $this->cdata->get_pixel = $value;
    }

    public function setPutPixel(null|\FFI\CData $value)
    {
        $this->cdata->put_pixel = $value;
    }

    public function setSubImage(null|\FFI\CData $value)
    {
        $this->cdata->sub_image = $value;
    }

    public function setAddPixel(null|\FFI\CData $value)
    {
        $this->cdata->add_pixel = $value;
    }
}
