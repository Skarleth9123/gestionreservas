<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->unsignedBigInteger('habitacione_id');
            $table->foreign('habitacione_id')->references('id')->on('habitaciones');
            $table->unsignedBigInteger('huespede_id');
            $table->foreign('huespede_id')->references('id')->on('huespedes');
            $table->integer('numero_de_huespedes');
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
        Schema::dropIfExists('reservas');
    }
}
