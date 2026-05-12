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

        Schema::create('programas_educacion_superior', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codigo_snies_del_programa')->unique();
            $table->string('nombre_del_programa')->nullable();
            $table->string('titulo_otorgado')->nullable();
            $table->string('estado_programa')->nullable();
            $table->string('reconocimiento_del_ministerio')->nullable();
            $table->string('nivel_academico')->nullable();
            $table->string('modalidad')->nullable();
            $table->unsignedBigInteger('codigo_ies');
            $table->foreign('codigo_ies')->references('codigo_institucion')->on('instituciones_educacion_superior')->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas_educacion_superior');
    }
};
