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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user-id');
            $table->string('name');
            $table->string('title');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('currency');
            $table->bigInteger('phone');
            $table->enum('state', ['register', 'step1', 'step2', 'approved', 'complete', 'reject']);
            $table->time('startWorkHour');
            $table->time('endWorkHour');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
