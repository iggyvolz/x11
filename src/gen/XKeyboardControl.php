<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XKeyboardControl extends XKeyboardControlConst
{
    public function setKeyClickPercent(int $value)
    {
        $this->cdata->key_click_percent = $value;
    }

    public function setBellPercent(int $value)
    {
        $this->cdata->bell_percent = $value;
    }

    public function setBellPitch(int $value)
    {
        $this->cdata->bell_pitch = $value;
    }

    public function setBellDuration(int $value)
    {
        $this->cdata->bell_duration = $value;
    }

    public function setLed(int $value)
    {
        $this->cdata->led = $value;
    }

    public function setLedMode(int $value)
    {
        $this->cdata->led_mode = $value;
    }

    public function setKey(int $value)
    {
        $this->cdata->key = $value;
    }

    public function setAutoRepeatMode(int $value)
    {
        $this->cdata->auto_repeat_mode = $value;
    }
}
