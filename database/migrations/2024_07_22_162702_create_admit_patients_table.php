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
        Schema::create('admit_patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('patient_name');
            $table->string('patient_number');
            $table->string('p_payment');
            $table->string('p_discount')->nullable();
            $table->string('p_due_payment')->nullable();
            $table->string('p_age');
            $table->string('patient_address');
            $table->string('patient_problems')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admit_patients');
    }
};
