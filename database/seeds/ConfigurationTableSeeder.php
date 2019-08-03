<?php

use App\Configuration;
use Illuminate\Database\Seeder;

class ConfigurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conf = new Configuration;
        $conf->email_notification = "jonathan.pradi@dvs360.com";
        $conf->facebook = "www.facebok.com";
        $conf->twitter = null;
        $conf->instagram = null;
        $conf->youtube = null;
        $conf->linkedin = null;
        $conf->direccion = "Avenida Avellaneda 2540, CABA";
        $conf->telefono = "4613-0147";
        $conf->correo = "info@dvs360.com";
        $conf->horario = "Lunes - Sábado 9 a 18 Hs.";

        $conf->save();
    }
}
