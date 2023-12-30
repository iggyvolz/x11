<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XKeyboardStateConst extends \iggyvolz\x11\XStruct
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

    public function getLedMask(): int
    {
        return $this->cdata->led_mask;
    }

    public function getGlobalAutoRepeat(): int
    {
        return $this->cdata->global_auto_repeat;
    }

    public function getAutoRepeats(): never
    {
        throw new \LogicException('Not yet implemented');
    }
}
