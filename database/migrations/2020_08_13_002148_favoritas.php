<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class favoritas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_quadra')->nullable();
            $table->integer('id_user')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_quadra')->references('id')->on('quadra');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favoritas');
    }
}
