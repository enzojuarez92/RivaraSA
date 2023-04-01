<?php

use Modules\Slider\Entities\Slider;

if (!function_exists('sliderRender')) {
    function sliderRender($sliderKey)
    {
        $slider = Slider::with('content')->where('visible', 1)
            ->where('key', $sliderKey)->first();

        return $slider->content->where('visible', 1)->sortBy('order');
    }
}
