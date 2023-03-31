<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormularioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_beneficiario", 120);
            $table->integer("cedula_beneficiario");
            $table->string("banco_beneficiario", 120);
            $table->string("telefono_beneficiario", 120)->nullable();
            $table->string("nro_cuenta", 20);
            $table->string("tipo_persona", 10);
            $table->string("tipo_cuenta", 10);
            $table->string("monto_enviar");
            $table->string("imagen_comprobante", 120);
            $table->string("terminos_comprobante", 120);
            $table->string("email_comprobante", 120);
            $table->bigInteger('id_moneda')->unsigned();
            $table->bigInteger('id_entidad')->unsigned();
            $table->bigInteger('id_formulario')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_estado')->unsigned();
            $table->foreign('id_moneda')->references('id')->on('tipo_moneda');
            $table->foreign('id_entidad')->references('id')->on('tipo_entidad');
            $table->foreign('id_formulario')->references('id')->on('tipo_formulario');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_estado')->references('id')->on('estado');
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
        Schema::dropIfExists('formulario');
    }
}
