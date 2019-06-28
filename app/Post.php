<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at'];
    protected $fillable = [
        'title', 'body', 'iframe', 'extract', 'category_id', 'published_at', 'user_id',
    ];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function scopePublicados($query)
    {
        $query->with('category', 'tags', 'fotos')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', Carbon::now())
            ->latest('published_at');
    }

    public function scopePermitidos($query)
    {
        if (auth()->user()->can('view', $this)) {
            return Post::with('category', 'tags', 'user');
        }

        return Post::with('category', 'tags', 'user')->where('user_id', auth()->id())->latest('published_at');
    }

    public function fotos()
    {
        return $this->morphMany('App\Foto', 'model');
    }

    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;
        $this->attributes['url'] = str_slug($title);
    }

    public function setPublishedAtAttribute($published_at)
    {
        $this->attributes['published_at'] = $published_at
        ? Carbon::parse($published_at)
        : null;
    }

    public function setCategoryIdAttribute($category)
    {
        $this->attributes['category_id'] = Category::find($category)
        ? $category
        : Category::create(['name' => $category])->id;
    }

    public function isPublished()
    {
        // return ( bool ) $this->published_at;
        return !is_null($this->published_at) && $this->published_at < today();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function escritor()
    {
        return $this->user->name ?? 'Rivara S.A.';
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

    public function link()
    {
        return route('blog.show', $this);

    }

    public function whatsapp()
    {
        return 'https://wa.me/?text=' . env('APP_URL') . $this->link();
    }

}
