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
        Schema::create('exams_notes', function (Blueprint $table) {
            $table->id();
            $table->integer('student_subject_id');
            $table->integer('student_id');
            $table->integer('exam_work_id');
            $table->double('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams_notes');
    }
};
