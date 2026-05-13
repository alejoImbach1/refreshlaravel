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
        Schema::create('municipios_geograficos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codigo_municipio')->unique();
            $table->string('nombre');
            $table->unsignedBigInteger('codigo_departamento');
            $table->foreign('codigo_departamento')->references('codigo_departamento')->on('departamentos_geograficos');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipios_geograficos');
    }
};
