<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XKeyboardState extends XKeyboardStateConst
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

    public function setLedMask(int $value)
    {
        $this->cdata->led_mask = $value;
    }

    public function setGlobalAutoRepeat(int $value)
    {
        $this->cdata->global_auto_repeat = $value;
    }
}
