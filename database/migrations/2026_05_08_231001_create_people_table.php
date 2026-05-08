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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->enum('nuip_type', ["CEDULA_CIUDADANIA","REGISTRO_CIVIL_NACIMIENTO","TARJETA_IDENTIDAD","CEDULA_EXTRANJERIA","PASAPORTE"])->default('CEDULA_CIUDADANIA');
            $table->string('nuip', 10)->unique()->nullable();
            $table->string('name', 80);
            $table->string('surname', 80);
            $table->enum('gender', ["MALE","FEMALE","OTHER"]);
            $table->date('birth_date');
            $table->string('email')->nullable();
            $table->string('phone_number', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
