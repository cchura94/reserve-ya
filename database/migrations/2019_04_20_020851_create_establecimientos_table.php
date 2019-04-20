<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('activo');
            $table->string('direccion');
            $table->integer('tiempo_reserva_anticipada');
            $table->bigInteger('pais_id')->unsigned();
            $table->string('nit');
            $table->text('descripcion');
            $table->integer('valor_descuento_maximo');
            $table->string('email');
            $table->boolean('favorito');
            $table->string('piso');
            $table->boolean('tiene_posibles_citas');
            $table->string('horas_contadas');
            $table->string('imagen');
            $table->string('imagen2');
            $table->string('lat');
            $table->string('lng');
            $table->string('logo');
            $table->integer('porcentaje_descuento_maximo');
            $table->string('nombre');
            $table->bigInteger('zona_id')->unsigned();
            $table->boolean('notificar_cancelado');
            $table->boolean('notificar_reservado');
            $table->string('estado_abierto');
            $table->string('telefono');
            $table->bigInteger('user_id')->unsigned();          
            
            $table->timestamps();

            $table->foreign('pais_id')->references('id')->on('pais');
            $table->foreign('zona_id')->references('id')->on('zonas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimientos');
    }
}
