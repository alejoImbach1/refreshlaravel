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
        Schema::disableForeignKeyConstraints();

        Schema::create('programas_educacion_superior', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codigo_sines_del_programa');
            $table->string('nombre del programa')->nullable();
            $table->string('titulo_otorgado')->nullable();
            $table->string('estado_programa')->nullable();
            $table->string('reconocimiento_del_ministerio')->nullable();
            $table->string('nivel_academico')->nullable();
            $table->string('modalidad')->nullable();
            $table->foreignId('institucion_educacion_superior_id')->constrained();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas_educacion_superior');
    }
};
