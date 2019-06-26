<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Foto;
use App\Project;
use App\Category;
use App\ProjectType;
use App\ProjectField;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\ProjectRequest;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_types = ProjectType::all();
        $projects = Project::all();
        $fields = ProjectField::all();
        return view('admin.projects.index', compact('projects', 'fields', 'project_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProjectType $project_type)
    {
        $categorias = Category::all();
        $tags = Tag::all();
        return view('admin.projects.create', compact(['project_type', 'categorias', 'tags']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request, ProjectType $project_type)
    {
        try {
            $model['project_type_id'] = $project_type->id;
            $model['title'] = $request->get('title');
            $model['url'] = \str_slug($model['title']);
            $model['body'] = $request->get('body');
            $model['extract'] = $request->get('extract');
            foreach ($project_type->fields as $f) {
                $data[$f->name] = $request->get($f->name);
            }
            $model['data'] = $data;
            $model['category_id'] = $request->get('category_id');
            $project = Project::create($model);
            $tags = [];
            if ($request->tags) {
                foreach ($request->tags as $tag) {
                    $tags[] = tag::Find($tag)
                        ? $tag
                        : tag::create(['name' => $tag])->id;
                }
                $project->tags()->sync($tags);
            }
            if ($project->save()) {
                return redirect('admin/projects')->with('success', 'Proyecto (' . $project_type->name . ') creado exitosamente!');
            }
            return back()->with('war', 'No se pudo guardar el proyecto.');
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
    public function show(string $url)
    {
        try {
            $project = Project::where('url', $url)->get()->first();
            return view('frontend.projects.show', compact(['project']));
        } catch (\Exception $ex) {
            return back()->with('war', $ex->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Category::all();
        $tags = Tag::all();
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact(['project', 'categorias', 'tags']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->title = $request->get('title');
            $project->body = $request->get('body');
            $project->extract = $request->get('extract');
            $project->category_id = $request->get('category_id');
            foreach ($project->type->fields as $f) {
                $data[$f->name] = $request->get($f->name);
            }
            $project->data = $data;
            $tags = [];
            foreach ($request->tags as $tag) {
                $tags[] = tag::Find($tag)
                    ? $tag
                    : tag::create(['name' => $tag])->id;
            }
            $project->tags()->sync($tags);
            if ($project->update()) {
                return back()->with('success', 'Proyecto (' . $project->type->name . ') actualizado exitosamente!');
            }
            return back()->with('war', 'No se pudo actualizar el proyecto.');
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
        try {
            $project = Project::findOrFail($id);
            $project->tags()->detach();

            foreach ($project->fotos as $foto) {
                $fotoPatch = str_replace('storage', 'public', $foto->url);
                Storage::delete($fotoPatch);
            }
            $project->fotos()->delete();
            if ($project->delete()) {
                return back()->with('success', 'Proyecto (' . $project->type->name . ') eliminado exitosamente!');
            }
            return back()->with('war', 'No se pudo eliminar el proyecto.');
        } catch (\Exception $ex) {
            return back()->with('war', $ex->getMessage());
        }
    }

    public function addFoto(Project $project)
    {
        try {
            $foto = request()->file('photo');
            $fotoUrl = $foto->store('projects');
            $project->fotos()->create([
                'url' => $fotoUrl
            ]);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
