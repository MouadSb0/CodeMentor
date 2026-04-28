<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_exercise', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->foreignId('exercise_id')->constrained()->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['course_id', 'exercise_id']);
        });

        Schema::create('course_quiz', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->foreignId('quiz_id')->constrained()->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['course_id', 'quiz_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_quiz');
        Schema::dropIfExists('course_exercise');
    }
};
