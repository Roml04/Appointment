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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('doctor_id');
            // $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            // $table->unsignedBigInteger('patient_id');
            // $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
            $table->string('status');
            $table->string('appointment_type');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->text('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function(Blueprint $table) {
            $table->dropForeign('appointments_doctor_id_foreign');
            $table->dropForeign('appointments_patient_id_foreign');
        });
        Schema::dropIfExists('appointments');
    }
};
