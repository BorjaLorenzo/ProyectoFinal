<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ParteLimpieza extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('limpieza',function (Blueprint $table){
            $table->id();
            $table->integer('id_trabajador');
            $table->string('puesto');
            $table->dateTime('fecha');
            $table->string('peticion_material');
            $table->string('deterioro_material');
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
