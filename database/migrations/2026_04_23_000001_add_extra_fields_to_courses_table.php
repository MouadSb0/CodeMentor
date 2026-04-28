<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('level')->default('Beginner');
            $table->string('duration')->nullable();        // e.g. "8.5 Hours"
            $table->decimal('price', 8, 2)->nullable();   // null = free
            $table->decimal('rating', 3, 1)->default(0);
            $table->integer('modules_count')->default(0);
            $table->integer('lessons_count')->default(0);
            $table->boolean('is_premium')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['level', 'duration', 'price', 'rating', 'modules_count', 'lessons_count', 'is_premium']);
        });
    }
};
