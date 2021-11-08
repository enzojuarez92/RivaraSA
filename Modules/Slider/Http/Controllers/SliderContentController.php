<?php

namespace Modules\Slider\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Modules\Slider\Entities\Slider;
use Modules\Slider\Entities\Slidercontent;

class SliderContentController extends Controller
{
    public function store(Request $request, Slider $slider)
    {
        try {

            if (!is_null($request->image)) {
                $path = config('slider.image_path');
                $nombre = Str::slug($request->title);
                $imagen = request()->file('image');
                $viejaIMG = null;

                $subirFoto = $this->guardarFoto($imagen, $nombre, $path, 1920, 512, $viejaIMG);
            }

            $slider->content()->create([
                'title' => $request->title,
                'description' => $request->description,
                'action_call' => $request->action_call,
                'url' => $request->url,
                'order' => $request->order,
                'image' => $subirFoto ?? '',
                'visible' => !is_null($request->visible),
            ]);

            flash(MSG_SUCCESS . "El elemento se guardó correctamente.")
                ->success()
                ->important();

            return back();

        } catch (\Exception $ex) {
            flash(MSG_ERROR . $ex->getMessage())
                ->error()
                ->important();

            return back();
        }
    }

    public function edit(Slidercontent $slidercontent)
    {
        return view('slider::content.edit', compact('slidercontent'));
    }

    public function update(Request $request, Slidercontent $slidercontent)
    {
        try {

            $data = $request->except(['image', 'visible']);

            $data['visible'] = !is_null($request->visible);

            if (!is_null($request->image)) {
                $path = config('slider.image_path');
                $nombre = Str::slug($request->title);
                $imagen = request()->file('image');
                $viejaIMG = $slidercontent->image;
                $subirFoto = $this->guardarFoto($imagen, $nombre, $path, 1920, 512, $viejaIMG);
                $data['image'] = $subirFoto;
            }

            $slidercontent->update($data);

            flash("Guardado Correctamente.")
                ->success()
                ->important();

            return back();

        } catch (\Exception $ex) {

            flash(MSG_ERROR . $ex->getMessage())
                ->error()
                ->important();

            return back();
        }

    }

    public function destroy(Slidercontent $slidercontent)
    {
        try {

            File::delete(public_path() . '/' . $slidercontent->image);

            $slidercontent->delete();

            flash(MSG_SUCCESS . "El elemento se eliminó correctamente.")
                ->success()
                ->important();

            return back();

        } catch (\Exception $ex) {

            flash(MSG_ERROR . $ex->getMessage())
                ->error()
                ->important();

            return back();
        }
    }

    private static function guardarFoto($img, $nombre = null, $path = 'imagenes', $ancho = null, $alto = null, $viejaIMG = null)
    {
        $n = ($nombre)
            ? Str::slug($nombre) . '-' . Str::random(5)
            : Str::random(10);

        // ruta de las imagenes guardadas
        $ruta = public_path('/' . $path);

        // si no existe la carpeta la creo
        if (!File::exists($ruta)) {
            File::makeDirectory($ruta,  0777, true, true);
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
}
