<?php

namespace App\Http\Controllers\Admin;

use App\Configuration;
use App\Foto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfiguracionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = Configuration::find(1);
        return view('admin.configurations.index', compact('config'));
    }
    /**
     * actualiza las notificaciones
     *
     * @param Request $request
     * @return void
     */
    public function updateNotifications(Request $request)
    {
        $config = Configuration::find(1);
        $config->email_notification = $request->email_notification;
        $config->email_sender = $request->email_sender;
        $config->app_name = $request->app_name;

        $config->update();

        return back()->with('flash', 'Configuraciones Actualizada');
    }
    /**
     * actualiza el tag de google.
     *
     * @param Request $request
     * @return void
     */
    public function updateTag(Request $request)
    {
        $config = Configuration::find(1);
        $config->admin_tagmanager = $request->admin_tagmanager;
        $config->id_analytics = $request->id_analytics;

        $config->update();

        return back()->with('flash', 'Id Tag Manager Actualizado');
    }
    /**
     * actualiza las redes sociales
     *
     * @param Request $request
     * @return void
     */
    public function updateRedes(Request $request)
    {
        $config = Configuration::find(1);
        $config->facebook = $request->facebook;
        $config->twitter = $request->twitter;
        $config->instagram = $request->instagram;
        $config->youtube = $request->youtube;
        $config->linkedin = $request->linkedin;

        $config->update();

        return back()->with('flash', 'Redes sociales actualizadas');
    }
    /**
     * actualiza los datos de contacto
     *
     * @param Request $request
     * @return void
     */
    public function updateContacto(Request $request)
    {
        $config = Configuration::find(1);
        $config->direccion = $request->direccion;
        $config->telefono = $request->telefono;
        $config->horario = $request->horario;
        $config->correo = $request->correo;
        $config->mapa = $request->mapa;

        $config->update();

        return back()->with('flash', 'Datos de contacto actualizados');
    }
    /**
     * muestra vista de tabla de logos y posibilidad de subir.
     *
     * @return void
     */
    public function createLogos()
    {
        $config = Configuration::find(1);
        return view('admin.configurations.createLogo', compact('config'));
    }
    /**
     * subir un logo nuevo y asignarle un espacio.
     *
     * @param Request $request
     * @return void
     */
    public function subirLogo(Request $request)
    {
        $config = Configuration::find(1);
        if ($request->hasFile('foto')) {
            $foto = request()->file('foto');
            $fotoUrl = $foto->store('admin/logos');

            $newFoto = new Foto;
            $newFoto->create([
                'model_type' => Configuration::class,
                'model_id' => $config->id,
                'espacio' => $request->espacio,
                'url' => $fotoUrl,
            ]);
        }
        return back()->with('flash', 'Nuevo logo subido');
    }
    /**
     * borrar una foto
     *
     * @param [type] $id
     * @return void
     */
    public function borrarLogo($id)
    {
        $foto = Foto::find($id);
        $foto->delete();
        return back()->with('flash', 'Eliminaste un logo correctamente');
    }
    public function cambioEspacio(Request $request)
    {
        $fotos = Foto::where('espacio', $request->espacio)->update(['espacio' => null]);

        $foto = Foto::find($request->foto)->update(['espacio' => $request->espacio]);

        return back()->with('flash', 'Cambiaste espacio correctamente');
    }
}
