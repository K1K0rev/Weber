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
        Schema::create('user_courses', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->foreign('user_id')->references('id')->on('users');
            $table->string('course_id')->foreign('course_id')->references('id')->on('courses');
            $table->enum('status', ['not_active', 'processing', 'completed', 'not_completed'])->default('not_active');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_courses');
    }
};
