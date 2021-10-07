<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IncidenciasCuras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias_curas',function (Blueprint $table){
            $table->id();
            $table->integer('id_trabajador');
            $table->string('puesto');
            $table->date('fecha');
            $table->string('nombre_afectado');
            $table->string('localidad_afectado');
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
