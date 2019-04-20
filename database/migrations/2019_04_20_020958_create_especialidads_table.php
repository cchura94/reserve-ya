<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('establecimiento_id')->unsigned();
            $table->string('descripcion');
            $table->integer('descuento_maximo');
            $table->integer('duracion');
            $table->integer('duracion_h');
            $table->integer('duracion_m');
            $table->integer('tiempo_extra');
            $table->string('nombre');
            $table->decimal('precio', 8, 2);
            $table->decimal('precio_from', 8, 2);
            $table->decimal('conteo_horas_especialidad', 8, 2);        
                       
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('establecimiento_id')->references('id')->on('establecimientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('especialidads');
    }
}
