<?php

namespace Modules\Slider\Entities;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = [];

    public function content()
    {
        return $this->hasMany(Slidercontent::class);
    }

    public function contentVisible()
    {
        return $this
            ->content()
            ->whereVisible(true);
    }
}
