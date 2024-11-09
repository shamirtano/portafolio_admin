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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('title', 100);
            $table->string('last_job', 100)->nullable();
            $table->string('avatar')->nullable(); // imagen
            $table->string('email', 100);
            $table->string('phone', 25)->nullable();
            $table->string('mobile', 50)->nullable();
            $table->date('birthday')->nullable();
            $table->string('github')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->text('bio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};