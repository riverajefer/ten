<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registros', function ($table) {
            $table->integer('sector_id');
            $table->string('encargado');
            $table->string('cargo');
            $table->string('localidad');
            $table->string('direccion');
            $table->string('celular');
            $table->string('telefono');
            $table->string('extension');
            $table->string('observaciones');
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
