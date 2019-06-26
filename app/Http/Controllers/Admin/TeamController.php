<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;
use ImageHelper;

class TeamController extends Controller
{

    // seteo de modelo
    public $modelo = 'App\Team';
    // seteo de ruta imagenes
    public $rutaIMG = 'assets/img/colaboradores';
    // carpeta donde estan las vistas
    public $vista = 'admin.team';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view', new Team);
        $modelo = $this->modelo;
        $miembros = $modelo::all();
        return view($this->vista . '.index', compact('miembros'));
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
        $this->authorize('update', new Team);
        $this->validate($request, [
            'name' => 'required|max:180',
            'lastName' => 'required|max:180',
            'description' => 'max:2000',
            'email' => 'email',
            'role' => 'max:180',
            'facebook' => 'max:180',
            'twitter' => 'max:180',
            'instagram' => 'max:180',
            'linkedin' => 'max:180',
        ]);

        try {
            $modelo = $this->modelo;
            $team = new $modelo;
            $team->name = $request->name;
            $team->lastName = $request->lastName;
            $team->description = $request->description;
            $team->email = $request->email;
            $team->role = $request->role;
            $team->facebook = $request->facebook;
            $team->twitter = $request->twitter;
            $team->instagram = $request->instagram;
            $team->linkedin = $request->linkedin;

            if (!is_null($request->image)) {
                $path = $this->rutaIMG;
                $nombre = $team->name;
                $imagen = request()->file('image');
                $viejaIMG = null;
                $subirFoto = ImageHelper::guardar($imagen, $nombre, $path, 800, 800, $viejaIMG);

                $team->image = $subirFoto;
            }

            $team->save();
            return back()->with('success', 'Guardado Correctamente');
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
        $this->authorize('update', new Team);
        $modelo = $this->modelo;
        $team = $modelo::findOrFail($id);
        return view($this->vista . '.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $this->authorize('update', new Team);
        $this->validate($request, [
            'name' => 'required|max:180',
            'lastName' => 'required|max:180',
            'description' => 'max:2000',
            'email' => 'email',
            'role' => 'max:180',
            'facebook' => 'max:180',
            'twitter' => 'max:180',
            'instagram' => 'max:180',
            'linkedin' => 'max:180',
        ]);

        try {
            $team->name = $request->name;
            $team->lastName = $request->lastName;
            $team->description = $request->description;
            $team->email = $request->email;
            $team->role = $request->role;
            $team->facebook = $request->facebook;
            $team->twitter = $request->twitter;
            $team->instagram = $request->instagram;
            $team->linkedin = $request->linkedin;

            if (!is_null($request->image)) {
                $path = $this->rutaIMG;
                $nombre = $team->name;
                $imagen = request()->file('image');
                $viejaIMG = $team->image;
                $subirFoto = ImageHelper::guardar($imagen, $nombre, $path, 800, 800, $viejaIMG);

                $team->image = $subirFoto;
            }

            $team->save();
            return back()->with('success', 'Actualizado Correctamente');
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
    public function destroy(Team $team)
    {
        $this->authorize('update', new Team);
        try
        {
            ImageHelper::borrar($team->image);
            $team->delete();
            return back()->with('war', 'Eliminado Correctamente');
        } catch (\Exception $ex) {
            return back()->with('war', $ex->getMessage());
        }
    }
}
