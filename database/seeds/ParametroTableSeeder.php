<?php

use App\Parametro;
use Illuminate\Database\Seeder;

class ParametroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $fuenteRegistro1 = Parametro::create(['modelo' => 'fuente', 'titulo' => 'Formulario de Contacto', 'color' => '#00c0ef', 'contenido' => '']);
        $fuenteRegistro1->save();
        $fuenteRegistro2 = Parametro::create(['modelo' => 'fuente', 'titulo' => 'Registro Newsletter', 'color' => '#F00', 'contenido' => '']);
        $fuenteRegistro2->save();

        $comoConocio = Parametro::create(['modelo' => 'contacto', 'titulo' => 'Google', 'color' => '#F00', 'contenido' => '']);
        $comoConocio->save();
        $comoConocio1 = Parametro::create(['modelo' => 'contacto', 'titulo' => 'Recomendación', 'color' => '#f39c12', 'contenido' => '']);
        $comoConocio1->save();
        $comoConocio2 = Parametro::create(['modelo' => 'contacto', 'titulo' => 'Redes Sociales', 'color' => '#00c0ef', 'contenido' => '']);
        $comoConocio2->save();
        $comoConocio3 = Parametro::create(['modelo' => 'contacto', 'titulo' => 'Vi un trabajo de ustedes', 'color' => '#00c0ef', 'contenido' => '']);
        $comoConocio3->save();

    }
}
