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
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
            $table->string('status')->default('Scheduled');
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
