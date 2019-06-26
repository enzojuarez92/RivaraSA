<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    
    public function getRouteKeyName()
    {
        return 'url';
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['url'] = str_slug($name);
    }

    public function link()
    {
        return route('blog.category.show', $this);
    
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    
}
