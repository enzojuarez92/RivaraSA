<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::permitidos()->get();
        return view('admin.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::all();
        $tags = Tag::all();
        return view('admin.blog.crear', compact(
            'categorias',
            'tags'
        ));
    }
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required|unique:posts']);
        try
        {
            $post = Post::create([
                'title' => $request->title,
                'user_id' => auth()->id(),
            ]);

            return redirect()->route('admin.posts.edit', $post->id);
        } catch (\Exception $ex) {
            return back()->with('war', $ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::findOrFail($id);

        $this->authorize('view', $post);

        $categorias = Category::all();
        $tags = Tag::all();
        return view('admin.blog.edit', compact(
            'categorias',
            'tags',
            'post'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        try
        {
            $post = Post::findOrFail($id);
            $this->authorize('update', $post);
            $post->update($request->except('tags'));

            $tags = [];
            foreach ($request->tags as $tag) {
                $tags[] = Tag::Find($tag)
                ? $tag
                : Tag::create(['name' => $tag])->id;
            }
            $post->tags()->sync($tags);

            return back()->with('flash', 'Tu publicacion ha sido guardada');
        } catch (\Exception $ex) {
            return back()->with('war', $ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', new Post);
        try
        {
            $post = Post::findOrFail($id);
            $post->tags()->detach();

            foreach ($post->fotos as $foto) {
                $fotoPatch = str_replace('storage', 'public', $foto->url);
                Storage::delete($fotoPatch);
            }
            $post->fotos()->delete();
            $post->delete();

            return redirect()->route('admin.posts.index')->with('war', 'Publicación eliminada');
        } catch (\Exception $ex) {
            return back()->with('war', $ex->getMessage());
        }
    }

    public function addFoto(Post $post)
    {
        try {
            $foto = request()->file('photo');
            $fotoUrl = $foto->store('posts');
            $post->fotos()->create([
                'url' => $fotoUrl,
            ]);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
