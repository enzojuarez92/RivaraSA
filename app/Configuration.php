<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public function fotos()
    {
        return $this->morphMany('App\Foto', 'model');
    }
}
