<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToUserdatas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userdatas', function (Blueprint $table) {
            //se crea un campo de tipo cadena,se almacena una ruta en donde se almacena nuestra imagen, no se almacena la imagen en si
            $table->string('avatar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userdatas', function (Blueprint $table) {
            //
        });
    }
}
