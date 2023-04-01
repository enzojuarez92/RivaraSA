<?php

namespace Modules\Team\Entities;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = [];

    public function getImageAttribute($image)
    {
        return (file_exists($image))
        ? $image
        : "https://ui-avatars.com/api/?name={$this->name}+{$this->lastname}&background=D8BFD8&color=F8F8FF&size=500";
}
}
