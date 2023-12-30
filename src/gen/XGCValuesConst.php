<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XGCValuesConst extends \iggyvolz\x11\XStruct
{
    public function getFunction(): int
    {
        return $this->cdata->function;
    }

    public function getPlaneMask(): int
    {
        return $this->cdata->plane_mask;
    }

    public function getForeground(): int
    {
        return $this->cdata->foreground;
    }

    public function getBackground(): int
    {
        return $this->cdata->background;
    }

    public function getLineWidth(): int
    {
        return $this->cdata->line_width;
    }

    public function getLineStyle(): int
    {
        return $this->cdata->line_style;
    }

    public function getCapStyle(): int
    {
        return $this->cdata->cap_style;
    }

    public function getJoinStyle(): int
    {
        return $this->cdata->join_style;
    }

    public function getFillStyle(): int
    {
        return $this->cdata->fill_style;
    }

    public function getFillRule(): int
    {
        return $this->cdata->fill_rule;
    }

    public function getArcMode(): int
    {
        return $this->cdata->arc_mode;
    }

    public function getTile(): int
    {
        return $this->cdata->tile;
    }

    public function getStipple(): int
    {
        return $this->cdata->stipple;
    }

    public function getTsXOrigin(): int
    {
        return $this->cdata->ts_x_origin;
    }

    public function getTsYOrigin(): int
    {
        return $this->cdata->ts_y_origin;
    }

    public function getFont(): int
    {
        return $this->cdata->font;
    }

    public function getSubwindowMode(): int
    {
        return $this->cdata->subwindow_mode;
    }

    public function getGraphicsExposures(): bool
    {
        return $this->cdata->graphics_exposures === 1;
    }

    public function getClipXOrigin(): int
    {
        return $this->cdata->clip_x_origin;
    }

    public function getClipYOrigin(): int
    {
        return $this->cdata->clip_y_origin;
    }

    public function getClipMask(): int
    {
        return $this->cdata->clip_mask;
    }

    public function getDashOffset(): int
    {
        return $this->cdata->dash_offset;
    }

    public function getDashes(): int
    {
        return $this->cdata->dashes;
    }
}
