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
        Schema::create('status_lessons', function (Blueprint $table) {
            $table->integer('user_id')->foreign('user_id')->references('id')->on('users');
            $table->integer('lesson_id')->foreign('lesson_id')->references('id')->on('lessons');
            $table->enum('status', ['pending', 'progress', 'complete']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_lessons');
    }
};
