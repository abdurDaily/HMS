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
        Schema::create('patient_reports', function (Blueprint $table) {
            $table->id();
            $table->string('patinet_name');
            $table->string('patinet_number');
            $table->string('patinet_pay_bill');
            $table->string('patinet_discount');
            $table->string('doctor_name');
            $table->string('doctor_qualifications');
            $table->json('reports');
            $table->json('report_discount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_reports');
    }
};
