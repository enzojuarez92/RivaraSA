<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use ImageHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{

    // seteo de modelo
    public $modelo = 'App\Client';
    // seteo de ruta imagenes
    public $rutaIMG = 'assets/img/clients';
    // carpeta donde estan las vistas
    public $vista = 'admin.client';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try
        {
            $this->authorize('view', new Client);
            $modelo =$this->modelo;
            $miembros= $modelo::all();
            return view($this->vista.'.index', compact('miembros'));
        } catch (\Exception $ex) {
            return back()->with('war',$ex->getMessage());
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
        $this->authorize('update', new Client);
        $this->validate($request,[
            'name' => 'required|max:180',
            'description' => 'max:2000',
        ]);

        try {
            $modelo =$this->modelo;
            $team = new $modelo;
            $team->name = $request->name;
            $team->description = $request->description;

            if (!is_null($request->image)) {
                $path = $this->rutaIMG;
                $nombre = $team->name;
                $imagen= request()->file('image');
                $viejaIMG = null;
                $subirFoto = ImageHelper::guardar($imagen, $nombre, $path, 261, 293, $viejaIMG);

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
        $this->authorize('update', new Client);
        $modelo =$this->modelo;
        $team = $modelo::findOrFail($id);
        return view($this->vista.'.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $this->authorize('update', new Client);
        $this->validate($request,[
            'name' => 'required|max:180',
            'description' => 'max:2000',
        ]);

        try {
            $client->name = $request->name;
            $client->description = $request->description;

            if (!is_null($request->image)) {
                $path = $this->rutaIMG;
                $nombre = $client->name;
                $imagen= request()->file('image');
                $viejaIMG = $client->image;
                $subirFoto = ImageHelper::guardar($imagen, $nombre, $path, 261, 293, $viejaIMG);

                $client->image = $subirFoto;
            }

            $client->save();
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
    public function destroy(Client $client)
    {
        try
        {
            ImageHelper::borrar($client->image);
            $client->delete();
            return back()->with('war', 'Eliminado Correctamente');
        }
        catch(\Exception $ex)
        {
            return back()->with('war', $ex->getMessage());
        }
    }
}
