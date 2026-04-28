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
        Schema::table('achivements', function (Blueprint $table) {
            $table->foreignId('user_id')->after('id')->constrained()->cascadeOnDelete();
            $table->string('type')->after('user_id'); // secure_dev, cloud_guru, etc.
            $table->string('name')->after('type');
            $table->string('icon')->after('name');
            $table->string('color')->after('icon');
            $table->text('description')->nullable()->after('color');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('achivements', function (Blueprint $table) {
            $table->dropColumn(['user_id', 'type', 'name', 'icon', 'color', 'description']);
        });
    }
};
