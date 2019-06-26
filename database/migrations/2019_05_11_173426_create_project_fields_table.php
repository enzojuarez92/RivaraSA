<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('label');
            $table->boolean('nullable');
            $table->text('type');
            $table->text('data_type');
            $table->text('minlength')->nullable();
            $table->text('maxlength')->nullable();
            $table->text('min')->nullable();
            $table->text('max')->nullable();
            $table->text('placeholder')->nullable();
            $table->integer('project_type_id')->unsigned();
            $table->foreign('project_type_id')->references('id')->on('project_types');
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
        Schema::dropIfExists('project_fields');
    }
}
