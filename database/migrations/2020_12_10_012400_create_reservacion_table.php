<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacion', function (Blueprint $table) {
            $table->bigIncrements('id_reservacion');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('mascota_id');
            $table->unsignedBigInteger('num_habitacion');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('mascota_id')->references('id_mascota')->on('mascota');
            $table->foreign('num_habitacion')->references('num_habitacion')->on('habitacion');
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
        Schema::dropIfExists('reservacion');
    }
}
