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
        Schema::create('careers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('type');
            $table->string('role');
            $table->string('workplace');
            $table->string('location');
            $table->string('deadline')->nullable();
            $table->integer('salary')->nullable();
            $table->longText('description');
            $table->string('platform_code');
            $table->string('status');
            $table->string('application_link')->nullable();
            $table->string('application_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
