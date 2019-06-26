<?php

namespace App\Http\Controllers;

use App\tag;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        $posts = Post::publicados()->where('category_id',$category->id)->paginate(10);
        $ultimos = Post::publicados()->take(3)->get();
        $tags = tag::all();
        return view('frontend.blog.index', compact(
            'ultimos',
            'tags',
            'posts'
        ));
    }
}
