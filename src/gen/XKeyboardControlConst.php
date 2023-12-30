<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XKeyboardControlConst extends \iggyvolz\x11\XStruct
{
    public function getKeyClickPercent(): int
    {
        return $this->cdata->key_click_percent;
    }

    public function getBellPercent(): int
    {
        return $this->cdata->bell_percent;
    }

    public function getBellPitch(): int
    {
        return $this->cdata->bell_pitch;
    }

    public function getBellDuration(): int
    {
        return $this->cdata->bell_duration;
    }

    public function getLed(): int
    {
        return $this->cdata->led;
    }

    public function getLedMode(): int
    {
        return $this->cdata->led_mode;
    }

    public function getKey(): int
    {
        return $this->cdata->key;
    }

    public function getAutoRepeatMode(): int
    {
        return $this->cdata->auto_repeat_mode;
    }
}
