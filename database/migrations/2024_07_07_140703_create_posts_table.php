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
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('slug');
            $table->string('author_id');
            $table->string('image');
            $table->string('read_time')->nullable();
            $table->string('category_id')->nullable();
            $table->longText('content');
            $table->string('published_at')->nullable();
            $table->text('excerpt')->nullable();
            $table->mediumText('tags')->nullable();
            $table->text('description')->nullable();
            $table->string('platform_code');
            $table->string('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
