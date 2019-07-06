<?php

use App\Category;
use App\Post;
use App\tag;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $category = new Category;
        $category->name = "Recetas";
        $category->save();

        $category = new Category;
        $category->name = "Noticias";
        $category->save();

        $tag = new tag;
        $tag->name = "Recetas";
        $tag->save();

        $tag = new tag;
        $tag->name = "harina de maíz";
        $tag->save();

        $post = new Post;
        $post->title = "mi primer receta";
        $post->extract = "mi primer extracto de receta";
        $post->body = "mi primer cuerpo de receta";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 1;
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "mi segundo Receta";
        $post->extract = "mi segundo extracto de receta";
        $post->body = "mi segundo cuerpo de receta";
        $post->published_at = Carbon::now()->subDays(2);
        $post->category_id = 1;
        $post->user_id = 1;
        $post->save();

    }
}
