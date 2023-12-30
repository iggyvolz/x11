<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class Display extends DisplayConst
{
    public function setExtData(null|XExtDataPtr $value)
    {
        $this->cdata->ext_data = $value?->cdata;
    }

    public function setFd(int $value)
    {
        $this->cdata->fd = $value;
    }

    public function setPrivate2(int $value)
    {
        $this->cdata->private2 = $value;
    }

    public function setProtoMajorVersion(int $value)
    {
        $this->cdata->proto_major_version = $value;
    }

    public function setProtoMinorVersion(int $value)
    {
        $this->cdata->proto_minor_version = $value;
    }

    public function setPrivate3(int $value)
    {
        $this->cdata->private3 = $value;
    }

    public function setPrivate4(int $value)
    {
        $this->cdata->private4 = $value;
    }

    public function setPrivate5(int $value)
    {
        $this->cdata->private5 = $value;
    }

    public function setPrivate6(int $value)
    {
        $this->cdata->private6 = $value;
    }

    public function setResourceAlloc(null|\FFI\CData $value)
    {
        $this->cdata->resource_alloc = $value;
    }

    public function setByteOrder(int $value)
    {
        $this->cdata->byte_order = $value;
    }

    public function setBitmapUnit(int $value)
    {
        $this->cdata->bitmap_unit = $value;
    }

    public function setBitmapPad(int $value)
    {
        $this->cdata->bitmap_pad = $value;
    }

    public function setBitmapBitOrder(int $value)
    {
        $this->cdata->bitmap_bit_order = $value;
    }

    public function setNformats(int $value)
    {
        $this->cdata->nformats = $value;
    }

    public function setPixmapFormat(null|ScreenFormatPtr $value)
    {
        $this->cdata->pixmap_format = $value?->cdata;
    }

    public function setPrivate8(int $value)
    {
        $this->cdata->private8 = $value;
    }

    public function setRelease(int $value)
    {
        $this->cdata->release = $value;
    }

    public function setPrivate9(null|\FFI\CData $value)
    {
        $this->cdata->private9 = $value;
    }

    public function setPrivate10(null|\FFI\CData $value)
    {
        $this->cdata->private10 = $value;
    }

    public function setQlen(int $value)
    {
        $this->cdata->qlen = $value;
    }

    public function setLastRequestRead(int $value)
    {
        $this->cdata->last_request_read = $value;
    }

    public function setRequest(int $value)
    {
        $this->cdata->request = $value;
    }

    public function setPrivate11(null|\FFI\CData $value)
    {
        $this->cdata->private11 = $value;
    }

    public function setPrivate12(null|\FFI\CData $value)
    {
        $this->cdata->private12 = $value;
    }

    public function setPrivate13(null|\FFI\CData $value)
    {
        $this->cdata->private13 = $value;
    }

    public function setPrivate14(null|\FFI\CData $value)
    {
        $this->cdata->private14 = $value;
    }

    public function setMaxRequestSize(int $value)
    {
        $this->cdata->max_request_size = $value;
    }

    public function setPrivate15(null|\FFI\CData $value)
    {
        $this->cdata->private15 = $value;
    }

    public function setDefaultScreen(int $value)
    {
        $this->cdata->default_screen = $value;
    }

    public function setNscreens(int $value)
    {
        $this->cdata->nscreens = $value;
    }

    public function setScreens(null|ScreenPtr $value)
    {
        $this->cdata->screens = $value?->cdata;
    }

    public function setMotionBuffer(int $value)
    {
        $this->cdata->motion_buffer = $value;
    }

    public function setPrivate16(int $value)
    {
        $this->cdata->private16 = $value;
    }

    public function setMinKeycode(int $value)
    {
        $this->cdata->min_keycode = $value;
    }

    public function setMaxKeycode(int $value)
    {
        $this->cdata->max_keycode = $value;
    }

    public function setPrivate17(null|\FFI\CData $value)
    {
        $this->cdata->private17 = $value;
    }

    public function setPrivate18(null|\FFI\CData $value)
    {
        $this->cdata->private18 = $value;
    }

    public function setPrivate19(int $value)
    {
        $this->cdata->private19 = $value;
    }
}
