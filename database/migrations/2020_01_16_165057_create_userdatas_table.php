<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // relation
            $table->Biginteger('state_id')->unsigned()->nullable();
            $table->foreign('state_id')->references('id')->on('states');
            $table->Biginteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('Intro')->nullable();
            $table->string('numero')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userdatas');
    }
}
