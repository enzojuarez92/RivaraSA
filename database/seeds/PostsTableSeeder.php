<?php

use App\tag;
use App\Post;
use App\Category;
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
        $category->name = "Andamio Colgante Eléctrico";
        $category->save();

        $category = new Category;
        $category->name = "Pantalla de Protección Peatonal";
        $category->save();

        $category = new Category;
        $category->name = "Armado de Estructuras";
        $category->save();

        $tag = new tag;
        $tag->name = "Andamio Colgante Electrico";
        $tag->save();

        $tag = new tag;
        $tag->name = "Proteccion peatonal";
        $tag->save();

        $post = new Post;
        $post->title = "mi primer Obra";
        $post->extract = "mi primer extracto";
        $post->body = "mi primer cuerpo de Obra";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 1;
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "mi segundo Obra";
        $post->extract = "mi segundo extracto";
        $post->body = "mi segundo cuerpo de Obra";
        $post->published_at = Carbon::now()->subDays(2);
        $post->category_id = 2;
        $post->user_id = 1;
        $post->save();
        
        $post = new Post;
        $post->title = "mi tercer Obra";
        $post->extract = "mi tercer extracto";
        $post->body = "mi tercer cuerpo de Obra";
        $post->published_at = Carbon::now();
        $post->category_id = 3;
        $post->user_id = 2;
        $post->save();

        $post = new Post;
        $post->title = "mi cuarto Obra";
        $post->extract = "mi cuarto extracto";
        $post->body = "mi cuarto cuerpo de Obra";
        $post->published_at = Carbon::now();
        $post->category_id = 3;
        $post->user_id = 2;
        $post->save();
    }
}
