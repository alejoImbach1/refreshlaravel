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
        Schema::create('colegios', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('codigo_establecimiento')->unique();
            $table->string('nombre_establecimiento')->nullable();
            $table->string('nombre_departamento')->nullable();
            $table->string('nombre_municipio')->nullable();
            $table->string('zona')->nullable();
            $table->string('nombre_rector')->nullable();
            $table->string('especialidad')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colegios');
    }
};
