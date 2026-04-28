<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('disccussions', function (Blueprint $table) {
            $table->foreignId('group_id')->nullable()->after('category')->constrained('groups')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('disccussions', function (Blueprint $table) {
            $table->dropForeignIfExists(['group_id']);
            $table->dropColumn('group_id');
        });
    }
};
