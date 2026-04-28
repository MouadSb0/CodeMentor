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
        Schema::table('disccussions', function (Blueprint $table) {
            $table->string('attachment_url')->nullable()->after('content');
            $table->string('attachment_type')->nullable()->after('attachment_url'); // image, video, pdf, link
            $table->string('attachment_name')->nullable()->after('attachment_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('disccussions', function (Blueprint $table) {
            $table->dropColumn(['attachment_url', 'attachment_type', 'attachment_name']);
        });
    }
};
