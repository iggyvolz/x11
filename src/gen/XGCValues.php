<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XGCValues extends XGCValuesConst
{
    public function setFunction(int $value)
    {
        $this->cdata->function = $value;
    }

    public function setPlaneMask(int $value)
    {
        $this->cdata->plane_mask = $value;
    }

    public function setForeground(int $value)
    {
        $this->cdata->foreground = $value;
    }

    public function setBackground(int $value)
    {
        $this->cdata->background = $value;
    }

    public function setLineWidth(int $value)
    {
        $this->cdata->line_width = $value;
    }

    public function setLineStyle(int $value)
    {
        $this->cdata->line_style = $value;
    }

    public function setCapStyle(int $value)
    {
        $this->cdata->cap_style = $value;
    }

    public function setJoinStyle(int $value)
    {
        $this->cdata->join_style = $value;
    }

    public function setFillStyle(int $value)
    {
        $this->cdata->fill_style = $value;
    }

    public function setFillRule(int $value)
    {
        $this->cdata->fill_rule = $value;
    }

    public function setArcMode(int $value)
    {
        $this->cdata->arc_mode = $value;
    }

    public function setTile(int $value)
    {
        $this->cdata->tile = $value;
    }

    public function setStipple(int $value)
    {
        $this->cdata->stipple = $value;
    }

    public function setTsXOrigin(int $value)
    {
        $this->cdata->ts_x_origin = $value;
    }

    public function setTsYOrigin(int $value)
    {
        $this->cdata->ts_y_origin = $value;
    }

    public function setFont(int $value)
    {
        $this->cdata->font = $value;
    }

    public function setSubwindowMode(int $value)
    {
        $this->cdata->subwindow_mode = $value;
    }

    public function setGraphicsExposures(bool $value)
    {
        $this->cdata->graphics_exposures = $value === 1;
    }

    public function setClipXOrigin(int $value)
    {
        $this->cdata->clip_x_origin = $value;
    }

    public function setClipYOrigin(int $value)
    {
        $this->cdata->clip_y_origin = $value;
    }

    public function setClipMask(int $value)
    {
        $this->cdata->clip_mask = $value;
    }

    public function setDashOffset(int $value)
    {
        $this->cdata->dash_offset = $value;
    }

    public function setDashes(int $value)
    {
        $this->cdata->dashes = $value;
    }
}
