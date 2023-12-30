<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XDisplayConst extends \iggyvolz\x11\XStruct
{
    public function getExtData(): null|XExtDataPtr
    {
        return \is_null($this->cdata->ext_data) ? null : new \iggyvolz\x11\gen\XExtDataPtr($this->cdata->ext_data);
    }

    public function getPrivate1(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getFd(): int
    {
        return $this->cdata->fd;
    }

    public function getPrivate2(): int
    {
        return $this->cdata->private2;
    }

    public function getProtoMajorVersion(): int
    {
        return $this->cdata->proto_major_version;
    }

    public function getProtoMinorVersion(): int
    {
        return $this->cdata->proto_minor_version;
    }

    public function getVendor(): string
    {
        return \FFI::string($this->cdata->vendor);
    }

    public function getPrivate3(): int
    {
        return $this->cdata->private3;
    }

    public function getPrivate4(): int
    {
        return $this->cdata->private4;
    }

    public function getPrivate5(): int
    {
        return $this->cdata->private5;
    }

    public function getPrivate6(): int
    {
        return $this->cdata->private6;
    }

    public function getResourceAlloc(): null|\FFI\CData
    {
        return $this->cdata->resource_alloc;
    }

    public function getByteOrder(): int
    {
        return $this->cdata->byte_order;
    }

    public function getBitmapUnit(): int
    {
        return $this->cdata->bitmap_unit;
    }

    public function getBitmapPad(): int
    {
        return $this->cdata->bitmap_pad;
    }

    public function getBitmapBitOrder(): int
    {
        return $this->cdata->bitmap_bit_order;
    }

    public function getNformats(): int
    {
        return $this->cdata->nformats;
    }

    public function getPixmapFormat(): null|XScreenFormatPtr
    {
        return \is_null($this->cdata->pixmap_format) ? null : new \iggyvolz\x11\gen\XScreenFormatPtr($this->cdata->pixmap_format);
    }

    public function getPrivate8(): int
    {
        return $this->cdata->private8;
    }

    public function getRelease(): int
    {
        return $this->cdata->release;
    }

    public function getPrivate9(): null|\FFI\CData
    {
        return $this->cdata->private9;
    }

    public function getPrivate10(): null|\FFI\CData
    {
        return $this->cdata->private10;
    }

    public function getQlen(): int
    {
        return $this->cdata->qlen;
    }

    public function getLastRequestRead(): int
    {
        return $this->cdata->last_request_read;
    }

    public function getRequest(): int
    {
        return $this->cdata->request;
    }

    public function getPrivate11(): null|\FFI\CData
    {
        return $this->cdata->private11;
    }

    public function getPrivate12(): null|\FFI\CData
    {
        return $this->cdata->private12;
    }

    public function getPrivate13(): null|\FFI\CData
    {
        return $this->cdata->private13;
    }

    public function getPrivate14(): null|\FFI\CData
    {
        return $this->cdata->private14;
    }

    public function getMaxRequestSize(): int
    {
        return $this->cdata->max_request_size;
    }

    public function getDb(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getPrivate15(): null|\FFI\CData
    {
        return $this->cdata->private15;
    }

    public function getDisplayName(): string
    {
        return \FFI::string($this->cdata->display_name);
    }

    public function getDefaultScreen(): int
    {
        return $this->cdata->default_screen;
    }

    public function getNscreens(): int
    {
        return $this->cdata->nscreens;
    }

    public function getScreens(): null|XScreenPtr
    {
        return \is_null($this->cdata->screens) ? null : new \iggyvolz\x11\gen\XScreenPtr($this->cdata->screens);
    }

    public function getMotionBuffer(): int
    {
        return $this->cdata->motion_buffer;
    }

    public function getPrivate16(): int
    {
        return $this->cdata->private16;
    }

    public function getMinKeycode(): int
    {
        return $this->cdata->min_keycode;
    }

    public function getMaxKeycode(): int
    {
        return $this->cdata->max_keycode;
    }

    public function getPrivate17(): null|\FFI\CData
    {
        return $this->cdata->private17;
    }

    public function getPrivate18(): null|\FFI\CData
    {
        return $this->cdata->private18;
    }

    public function getPrivate19(): int
    {
        return $this->cdata->private19;
    }

    public function getXdefaults(): string
    {
        return \FFI::string($this->cdata->xdefaults);
    }
}
