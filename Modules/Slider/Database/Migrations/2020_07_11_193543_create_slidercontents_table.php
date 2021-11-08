<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidercontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slidercontents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('slider_id');
            $table->string('image');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('action_call')->nullable();
            $table->string('url')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('visible')->default(false);
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
        Schema::dropIfExists('slidercontents');
    }
}
