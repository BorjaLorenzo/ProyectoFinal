<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IncidenciasNinos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias_ninios',function (Blueprint $table){
            $table->id();
            $table->integer('id_trabajador');
            $table->string('puesto');
            $table->dateTime('fecha');
            $table->string('nombre_ninio');
            $table->string('vestimenta_ninio');
            $table->string('edad_ninio');
            $table->string('localidad_ninio');
            $table->string('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
