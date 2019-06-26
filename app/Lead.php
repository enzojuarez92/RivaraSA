<?php

namespace App;

use App\Parametro;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $guarded = [];

    public function parametro()
    {
        return $this->belongsTo(Parametro::class);
    }

    public function comoConocio()
    {
        return $this->belongsTo(\App\Parametro::class, 'conocio');
    }

}
