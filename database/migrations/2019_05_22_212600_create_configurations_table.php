<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email_notification')->nullable()->default('jonathan.pradi@dvs360.com');
            $table->string('email_sender')->nullable()->default('no-reply@dvs360.com');
            $table->string('app_name')->nullable()->default('DVS360 Desarrollo Web');
            $table->string('logo')->nullable()->default('img/dvs360/logoNegro.svg');
            $table->string('logo_alternativo')->nullable()->default('img/rivara/log_blanco.png');
            $table->string('logo_redes')->nullable()->default('/img/dvs360/logoNegro.png');
            $table->string('admin_tagmanager')->nullable()->default('GTM-PRWCCWT');
            $table->string('id_analytics')->nullable()->default('191287181');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('horario')->nullable();
            $table->text('mapa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configurations');
    }
}
