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
            $table->string('username')->unique()->nullable();
            $table->string('name')->unique();
            $table->bigInteger('balance')->default(0);
            $table->string('email')->unique()->nullable();
            $table->string('code')->unique()->nullable();
            $table->boolean('is_admin')->default(false);
            $table->string('number_phone')->unique()->nullable();
            $table->string('bankName')->nullable();
            $table->string('bankNumber')->nullable();
            $table->string('password');
            $table->tinyInteger('status')->default(1);
            $table->rememberToken();
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
