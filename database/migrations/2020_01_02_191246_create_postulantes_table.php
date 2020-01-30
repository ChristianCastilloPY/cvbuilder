<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulantes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombre');
            $table->string('apellido');
            $table->string('intro');
            $table->string('posicion'); 

            $table->string('numero');
            $table->string('correo');
            $table->string('pais');
            $table->string('direccion');
            $table->string('estado');
            $table->string('codigopostal');
            $table->string('linkedin');
            $table->string('sitioweb');

            $table->string('puesto');
            $table->string('empresa');
            $table->string('desdehastapuesto');
            $table->string('descriptionpuesto');

            $table->string('titulo');
            $table->string('escuela');
            $table->string('desdehastaeducacion');
            $table->string('descriptioneducacion'); 

            $table->string('habilidad');
            $table->string('nivelhabilidad');

            $table->string('hoobie');

            $table->string('idioma');
            $table->string('nivelidioma');

            // $table->biginteger('user_id')->unsigned();
            // // relation
            // $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('postulantes');
    }
}
