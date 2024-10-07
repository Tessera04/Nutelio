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
        Schema::create('biometric_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id')->constrained()->onDelete('cascade');
            $table->decimal('height', 5, 2);
            $table->decimal('weight', 5, 2);
            $table->decimal('body_fat_percentage', 5, 2);
            $table->decimal('muscle_mass_percentage', 5, 2);
            $table->decimal('waist_circumference', 5, 2);
            $table->decimal('hip_circumference', 5, 2);
            $table->decimal('chest_circumference', 5, 2);
            $table->integer('gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biometric_data');
    }
};
