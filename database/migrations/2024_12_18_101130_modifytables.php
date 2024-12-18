<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctors', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('specialization');
            $table->timestamps();
        });
        
        Schema::create('patients', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('appointments', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->string('appointment_type');
            $table->date('appointment_date');
            $table->date('appointment-time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function(Blueprint $table) {
            $table->dropForeign('doctors_doctor_id_foreign');
        });
        Schema::table('patients', function(Blueprint $table) {
            $table->dropForeign('patients_patient_id_foreign');
        });
        Schema::table('appointments', function(Blueprint $table) {
            $table->dropForeign('appointments_doctor_id_foreign');
            $table->dropForeign('appointments_patient_id_foreign');
        });

        Schema::dropIfExists('doctors');
        Schema::dropIfExists('patients');
        Schema::dropIfExists('appointments');
    }
};
