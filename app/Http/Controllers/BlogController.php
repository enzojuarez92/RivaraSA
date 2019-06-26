<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Project;
use App\Parametro;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conocio = Parametro::where('modelo', 'contacto')->get();
        $posts = Post::publicados()->paginate(10);
        $ultimos = Post::publicados()->take(3)->get();
        $tags = Tag::all();
        return view('frontend.blog.index', compact(
            'conocio',
            'ultimos',
            'tags',
            'posts'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $conocio = Parametro::where('modelo', 'contacto')->get();
        $ultimos = Post::publicados()->take(3)->get();
        $tags = Tag::all();
        $relacionados = Project::relacionadosPost($post)->take(3);
        return view('frontend.blog.view', compact(
            'conocio',
            'ultimos',
            'tags',
            'post',
            'relacionados'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function proyecto(string $url)
    {
        try {
            $project = Project::where('url', $url)->get()->first();
            $conocio = Parametro::where('modelo', 'contacto')->get();
            $relacionados = $project->relacionados()->take(3)->get();
            $tags = Tag::all();
            return view('frontend.projects.show', compact(['project', 'conocio', 'relacionados', 'tags']));
        } catch (\Exception $ex) {
            return back()->with('war', $ex->getMessage());
        }
    }

    public function proyectos($project_type_id)
    {
        try {
            $projects = Project::where($project_type_id)->get();
            return view('frontend.projects.index', compact(['projects']));
        } catch (\Exception $ex) {
            return back()->with('war', $ex->getMessage());
        }
    }
}
