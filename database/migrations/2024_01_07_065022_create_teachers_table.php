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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable()->unique();
            $table->string('name_english')->nullable();
            $table->string('name_bangla')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('designation_id');
            $table->string('dob')->nullable();
            $table->string('bank_account_no')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->default('male')->nullable();
            $table->string('religion')->nullable();
            $table->string('jod')->nullable();
            $table->string('image')->nullable();
            $table->text('address')->nullable();
            $table->string('subject')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
