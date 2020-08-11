<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuadraHasHorario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quadra_has_horario', function (Blueprint $table) {
            $table->id();
            $table->integer('quadra_id');
            $table->integer('horario_id');
            $table->integer('status');
            $table->integer('usuario_reserva');
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
        Schema::dropIfExists('quadra_has_horario');
    }
}
