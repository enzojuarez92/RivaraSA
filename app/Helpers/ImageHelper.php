<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ImageHelper
{
    /**
     * Calcula la edad a partir de la fecha de nacimiento.
     *
     * @param UploadedFile $img
     * @param string $path ruta donde va la imagen
     * @param $width
     * @param $height
     * @param string $path
     * @return string devuelve la ruta donde debemos guardar las imagenes
     */
    public static function guardar($img, $nombre = null, $path = 'imagenes', $ancho = null, $alto = null, $viejaIMG = null)
    {
        $n = ($nombre) ? str_slug($nombre).'-'.str_random(5) : str_random(10) ;
        // ruta de las imagenes guardadas
        $ruta = public_path('/'.$path);

        // si no existe la carpeta la creo
        if (!File::exists($ruta)) {
            File::makeDirectory($ruta, $mode = 0777, true, true);
        }
        
        // recogida del form
        $imagenOriginal = $img;
        
        // crear instancia de imagen
        $imagen = Image::make($imagenOriginal);
        
        // generar un nombre aleatorio para la imagen
        $temp_name = $n .'.'. $imagenOriginal->getClientOriginalExtension();


        $width = $imagen->width();
        $height = $imagen->height();
        if ($width != $height) {
            $size = max($width, $height);
            $imagen->resizeCanvas($size, $size, 'center', false, '#ffffff');
        }

        $imagen->resize($ancho, $alto, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        
        // guardar imagen
        // save( [ruta], [calidad])
        $guardar = $imagen->save($ruta .'/'. $temp_name, 100);
        
        if ($guardar) {
            if ($viejaIMG) {
                File::delete(public_path('/'.$viejaIMG));
            }
            return $path.'/'.$temp_name;
        }
    }

    public static function borrar($ruta)
    {
        File::delete(public_path().'/'.$ruta);
    }
}
