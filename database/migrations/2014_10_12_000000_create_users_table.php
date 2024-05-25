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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('r_password')->nullable(); // Cho phép giá trị null
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->enum('gender', ['0', '1', '2']);
            $table->string('image')->nullable();
            $table->enum('role', ['1', '2', '3', '4', '5']);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
