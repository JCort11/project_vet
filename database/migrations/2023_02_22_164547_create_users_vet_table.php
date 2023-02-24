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
            $table->string('last_name');
            $table->integer('phone_number');
            $table->string('address');
            $table->date('date_of_birth');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('remember_token')->unique();
            $table->timestamps();
            $table->string('image');
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
