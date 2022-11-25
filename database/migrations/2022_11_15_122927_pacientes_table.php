<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_completo');
            $table->string('fecha_nacimiento');
            $table->string('edad');
            $table->string('sexo');
            $table->string('domicilio');
            $table->string('codigo_postal');
            $table->string('escolaridad');
            $table->string('ocupacion');
            $table->string('religion');
            $table->string('estado_civil');
            $table->string('telefono');
            $table->string('alergias');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
};
