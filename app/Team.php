<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //


    public function getServiciosAttribute($value)
    {
        return json_decode($value);
    }
}
