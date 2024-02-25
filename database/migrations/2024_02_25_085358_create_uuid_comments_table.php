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
        Schema::create('uuid_comments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('UUID_id');
            $table->foreign('UUID_id')->references('id')->on('uuid');
            $table->string('name')->nullable();
            $table->string('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uuid_comments');
    }
};
