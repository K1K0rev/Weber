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
        Schema::create('supports_messages', function (Blueprint $table) {
            $table->id();
            $table->integer('support_id')->foreign('support_id')->references('id')->on('support');
            $table->integer('chat_id')->foreign('chat_id')->references('id')->on('chat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supports_messages');
    }
};
