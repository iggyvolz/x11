<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XImageConst extends \iggyvolz\x11\XStruct
{
    public function getWidth(): int
    {
        return $this->cdata->width;
    }

    public function getHeight(): int
    {
        return $this->cdata->height;
    }

    public function getXoffset(): int
    {
        return $this->cdata->xoffset;
    }

    public function getFormat(): int
    {
        return $this->cdata->format;
    }

    public function getData(): string
    {
        return \FFI::string($this->cdata->data);
    }

    public function getByteOrder(): int
    {
        return $this->cdata->byte_order;
    }

    public function getBitmapUnit(): int
    {
        return $this->cdata->bitmap_unit;
    }

    public function getBitmapBitOrder(): int
    {
        return $this->cdata->bitmap_bit_order;
    }

    public function getBitmapPad(): int
    {
        return $this->cdata->bitmap_pad;
    }

    public function getDepth(): int
    {
        return $this->cdata->depth;
    }

    public function getBytesPerLine(): int
    {
        return $this->cdata->bytes_per_line;
    }

    public function getBitsPerPixel(): int
    {
        return $this->cdata->bits_per_pixel;
    }

    public function getRedMask(): int
    {
        return $this->cdata->red_mask;
    }

    public function getGreenMask(): int
    {
        return $this->cdata->green_mask;
    }

    public function getBlueMask(): int
    {
        return $this->cdata->blue_mask;
    }

    public function getObdata(): null|\FFI\CData
    {
        return $this->cdata->obdata;
    }

    public function getCreateImage(): null|\FFI\CData
    {
        return $this->cdata->create_image;
    }

    public function getDestroyImage(): null|\FFI\CData
    {
        return $this->cdata->destroy_image;
    }

    public function getGetPixel(): null|\FFI\CData
    {
        return $this->cdata->get_pixel;
    }

    public function getPutPixel(): null|\FFI\CData
    {
        return $this->cdata->put_pixel;
    }

    public function getSubImage(): null|\FFI\CData
    {
        return $this->cdata->sub_image;
    }

    public function getAddPixel(): null|\FFI\CData
    {
        return $this->cdata->add_pixel;
    }
}
