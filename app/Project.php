<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Validation\Rules\Unique;

class Project extends Model
{
    protected $fillable = [
        'url',
        'title',
        'data',
        'project_type_id',
        'body',
        'category_id',
        'extract'
    ];

    protected $casts = [
        'data' => 'array',
        'read_at' => 'datetime',
    ];


    public function Type()
    {
        return $this->belongsTo(ProjectType::class, 'project_type_id');
    }

    public function Link()
    {
        return route('projects.show', $this->url);
    }

    public function Tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function fotos()
    {
        return $this->morphMany('App\Foto', 'model');
    }

    public function imagen()
    {
        $foto = $this->fotos->first();
        return ($this->fotos->first()) ? 'img/' . $foto->url : LOGO;
    }

    public function imagenRedes()
    {
        $foto = $this->fotos->first();
        return ($this->fotos->first()) ? env('APP_URL') . '/img/' . $foto->url : LOGO_REDES;
    }

    public function scopeRelacionados($query)
    {
        $by_category = $this->category->projects;
        $by_tag = new Collection();
        foreach ($this->tags as $tag) {
            $by_tag = $by_tag->merge($tag->projects);
        }
        return $by_category->merge($by_tag)->unique('id');
    }

    public function scopeRelacionadosPost($query, $post)
    {
        $by_category = $post->category->projects;
        $by_tag = new Collection();
        foreach ($post->tags as $tag) {
            $by_tag = $by_tag->merge($tag->projects);
        }
        return $by_category->merge($by_tag)->unique('id');
    }
}
