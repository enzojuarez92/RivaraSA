<?php

namespace App\Http\Controllers;

use App\tag;
use App\Post;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function show(tag $tag)
    {
        $posts = $tag->posts;
        $ultimos = Post::publicados()->take(3)->paginate(10);
        $tags = tag::all();
        return view('frontend.blog.index', compact(
            'ultimos',
            'tags',
            'posts'
        ));
    }
}
