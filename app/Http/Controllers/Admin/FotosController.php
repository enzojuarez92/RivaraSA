<?php

namespace App\Http\Controllers\Admin;

use App\Foto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\Constraint\Exception;

class FotosController extends Controller
{

    public function store()
    {
        try {
            $foto = request()->file('photo');
            $fotoUrl = $foto->store('posts');
            $model_type = request()->get('model_type');
            $model_id = request()->get('model_id');
            Foto::create([
                'url' => $fotoUrl,
                'model_type' => $model_type,
                'model_id' => $model_id
            ]);
        } catch (Exception $ex) {
            throw $ex;
        }
        // Foto::create([
        //     'url' => $fotoUrl,
        //     'model' => $model,
        // ]);
    }

    public function destroy($id)
    {
        $foto = Foto::findOrFail($id);
        $foto->delete();

        $fotoPatch = str_replace('storage', 'public', $foto->url);
        Storage::delete($fotoPatch);
        return back()->with('war', 'Foto eliminada');
    }
}
