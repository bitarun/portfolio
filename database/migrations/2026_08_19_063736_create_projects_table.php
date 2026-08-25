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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();

            $table->string('title_fa');
            $table->string('title_en');

            $table->string('summary_fa');
            $table->string('summary_en');

            $table->longText('description_fa');
            $table->longText('description_en');

            $table->enum('category', ['main', 'specialized', 'practice', 'package']);

            $table->json('tech_stack');
            $table->json('highlights_fa');
            $table->json('highlights_en');

            $table->string('github_url')->nullable();
            $table->string('demo_url')->nullable();
            $table->string('cover_image')->nullable();

            $table->unsignedInteger('order')->default(0);
            $table->boolean('is_featured')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
