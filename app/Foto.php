<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $guarded = [];

    public function fotoable()
    {
        return $this->morphTo();
    }
}
