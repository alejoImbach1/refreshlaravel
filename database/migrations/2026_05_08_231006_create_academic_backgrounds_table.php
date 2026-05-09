<?php

use App\Enums\AcademicBackgroundStatus;
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

        Schema::create('academic_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->enum('status', AcademicBackgroundStatus::cases());
            $table->date('starting_date')->nullable();
            $table->date('finishing_date')->nullable();
            $table->foreignId('person_id')->constrained();
            $table->foreignId('academic_program_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_backgrounds');
    }
};
