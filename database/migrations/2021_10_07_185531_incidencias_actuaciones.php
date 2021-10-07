<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IncidenciasActuaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias_actuaciones',function (Blueprint $table){
            $table->id();
            $table->integer('id_trabajador');
            $table->string('puesto');
            $table->dateTime('fecha');
            $table->string('nombre_victima');
            $table->string('localidad_victima');
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
