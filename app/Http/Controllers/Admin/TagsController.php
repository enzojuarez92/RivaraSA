<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $tags = Tag::all();
            return view('admin.tags.index', compact('tags'));
        } catch (\Exception $ex) {
            return back()->with('war', $ex->getMessage());
        }
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
        try {
            $request->validate(['name' => 'required']);
            $tag = Tag::create([
                'name' => $request->get('name'),
                'url' => str_slug($request->get('name'))
            ]);
            if ($tag->save()) {
                return back()->with('success', 'Registro guardado correctamente');
            }
            return back()->with('war', 'No se pudo guardar el registro.');
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
        $tag = Tag::findOrFail($id);
        return view('admin.tags.edit', compact('tag'));
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
        try {
            $request->validate(['name' => 'required']);
            $tag = Tag::findOrFail($id);
            $tag->name = $request->get('name');
            if ($tag->update()) {
                return back()->with('success', 'Registro actualizado correctamente');
            }
            return back()->with('war', 'No se pudo actualizar el registro.');
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
            $tag = Tag::findOrFail($id);
            if ($tag->delete()) {
                return back()->with('success', 'Registro eliminado correctamente');
            }
            return back()->with('war', 'No se pudo eliminar el registro.');
        } catch (\Exception $ex) {
            return back()->with('war', $ex->getMessage());
        }
    }
}
