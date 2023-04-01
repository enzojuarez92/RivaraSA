<?php

namespace Modules\Team\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Modules\Team\Entities\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $miembros = Team::all();
        return view('team::index', compact(
            'miembros'
        ));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('team::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:180',
            'lastname' => 'required|max:180',
            'description' => 'max:2000',
            'email' => 'email',
            'role' => 'max:180',
            'facebook' => 'max:180',
            'twitter' => 'max:180',
            'instagram' => 'max:180',
            'linkedin' => 'max:180',
        ]);

        try {
            $team = new Team;
            $team->name = $request->name;
            $team->lastname = $request->lastname;
            $team->description = $request->description;
            $team->email = $request->email;
            $team->role = $request->role;
            $team->facebook = $request->facebook;
            $team->twitter = $request->twitter;
            $team->instagram = $request->instagram;
            $team->linkedin = $request->linkedin;

            if (!is_null($request->image)) {
                $path = "assets/img/colaboradores";
                $nombre = $team->name;
                $imagen = request()->file('image');
                $viejaIMG = null;
                $subirFoto = $this->guardarFoto($imagen, $nombre, $path, 261, 293, $viejaIMG);

                $team->image = $subirFoto;
            }

            $team->save();

            flash("Creado Correctamente.")
                ->success()->important();

            return redirect()->route('team.index');
        } catch (\Exception $ex) {
            flash("Error: {$ex->getMessage()}")->error()->important();
            return back();
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('team::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(Team $team)
    {
        return view('team::edit', compact(
            'team'
        ));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|max:180',
            'lastname' => 'required|max:180',
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
            $team->lastname = $request->lastname;
            $team->description = $request->description;
            $team->email = $request->email;
            $team->role = $request->role;
            $team->facebook = $request->facebook;
            $team->twitter = $request->twitter;
            $team->instagram = $request->instagram;
            $team->linkedin = $request->linkedin;

            if (!is_null($request->image)) {
                $path = "assets/img/colaboradores";
                $nombre = $team->name;
                $imagen = request()->file('image');
                $viejaIMG = $team->image;
                $subirFoto = $this->guardarFoto($imagen, $nombre, $path, 261, 293, $viejaIMG);

                $team->image = $subirFoto;
            }

            $team->update();

            flash("Actualizado Correctamente.")
                ->success()->important();

            return back();
        } catch (\Exception $ex) {
            flash("Error: {$ex->getMessage()}")->error()->important();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(Team $team)
    {
        try {

            $team->delete();

            flash("Eliminado Correctamente.")
                ->success()->important();

            return back();
        } catch (\Exception $ex) {
            flash("Error: {ex->getMessage()}")->error()->important();
            return back();
        }
    }

    // HELPERS
    private static function guardarFoto($img, $nombre = null, $path = 'imagenes', $ancho = null, $alto = null, $viejaIMG = null)
    {
        $n = ($nombre) ? Str::slug($nombre) . '-' . Str::random(5) : Str::random(10);
        // ruta de las imagenes guardadas
        $ruta = public_path('/' . $path);

        // si no existe la carpeta la creo
        if (!File::exists($ruta)) {
            File::makeDirectory($ruta, $mode = 0777, true, true);
        }

        // recogida del form
        $imagenOriginal = $img;

        // crear instancia de imagen
        $imagen = Image::make($imagenOriginal);

        // generar un nombre aleatorio para la imagen
        $temp_name = $n . '.' . $imagenOriginal->getClientOriginalExtension();

        if ($ancho != null || $alto != null) {
            $imagen->resize($ancho, $alto, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }

        // guardar imagen
        // save( [ruta], [calidad])
        $guardar = $imagen->save($ruta . '/' . $temp_name, 100);

        if ($guardar) {
            if ($viejaIMG) {
                File::delete(public_path('/' . $viejaIMG));
            }
            return $path . '/' . $temp_name;
        }
    }

    private static function borrarFoto($ruta)
    {
        File::delete(public_path() . '/' . $ruta);
    }
}
