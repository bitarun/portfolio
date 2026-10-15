<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Optional demo video per language (YouTube for EN, Aparat for FA, for example).
            $table->string('video_url_en')->nullable()->after('demo_url');
            $table->string('video_url_fa')->nullable()->after('video_url_en');
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['video_url_en', 'video_url_fa']);
        });
    }
};
