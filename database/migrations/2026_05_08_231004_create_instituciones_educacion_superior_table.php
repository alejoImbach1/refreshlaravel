<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('instituciones_educacion_superior', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codigo_institucion')->unique();
            $table->string('nombre_institucion')->nullable();
            $table->string('estado')->nullable();
            $table->string('nit')->nullable();
            $table->string('departamento_domicilio')->nullable();
            $table->string('municipio_domicilio')->nullable();
            $table->string('direccion_domicilio')->nullable();
            $table->string('telefono_domicilio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instituciones_educacion_superior');
    }
};
