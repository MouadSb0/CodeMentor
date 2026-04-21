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
        Schema::table('exercises', function (Blueprint $table) {
            $table->json('files')->nullable()->after('tech_stack');
            $table->dropColumn(['starter_code', 'css_code', 'js_code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exercises', function (Blueprint $table) {
            $table->dropColumn('files');
            $table->text('starter_code')->nullable();
            $table->text('css_code')->nullable();
            $table->text('js_code')->nullable();
        });
    }
};
