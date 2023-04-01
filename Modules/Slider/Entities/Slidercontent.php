<?php

namespace Modules\Slider\Entities;

use Illuminate\Database\Eloquent\Model;

class Slidercontent extends Model
{
    protected $guarded = [];

    public function slider()
    {
        return $this->belongsTo(Slider::class);
    }

    public function imageShow()
    {
        return asset($this->image);
    }
}
