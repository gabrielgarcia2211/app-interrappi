<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasaCambioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasa_cambio', function (Blueprint $table) {
            $table->id();
            $table->string("descripcion");
            $table->string("valor");
            $table->bigInteger('id_formulario')->unsigned();
            $table->foreign('id_formulario')->references('id')->on('tipo_formulario');
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
        Schema::dropIfExists('tasa_cambio_');
    }
}
