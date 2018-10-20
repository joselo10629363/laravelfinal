<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAyudantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayudantes', function (Blueprint $table) {
            $table->increments('id');
            $table-> char('name', 60);
             $table->unsignedInteger('materia_id');
            $table->unsignedInteger('carrera_id');
            $table->unsignedInteger('aula_id');
            $table->String('Cant_Alunnos',10);

              $table->foreign('materia_id')->references('id')->on('materias');
              $table->foreign('carrera_id')->references('id')->on('carreras');
              $table->foreign('aula_id')->references('id')->on('aulas');
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
        Schema::dropIfExists('ayudantes');
    }
}
