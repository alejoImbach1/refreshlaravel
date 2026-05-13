<?php

use App\Models\Enums\AcademicBackgroundStatus;
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
        Schema::create('academic_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->enum('status', AcademicBackgroundStatus::cases())->default(AcademicBackgroundStatus::FINISHED);
            $table->date('starting_date')->nullable();
            $table->date('finishing_date')->nullable();
            $table->foreignId('person_id')->constrained()->cascadeOnDelete();
            // $table->unsignedBigInteger('programa_ies_id');
            // $table->foreign('programa_ies_id')->references('id')->on('programas_educacion_superior')->cascadeOnDelete();
            $table->morphs('acad_bgable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_backgrounds');
    }
};
