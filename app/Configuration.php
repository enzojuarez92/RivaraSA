<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{

    public function fotos()
    {
        return $this->morphMany('App\Foto', 'model');
    }
}
