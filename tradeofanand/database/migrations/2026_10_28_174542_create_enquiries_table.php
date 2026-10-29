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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 20);
            $table->string('email', 255)->nullable();
            $table->string('service', 100)->nullable();
            $table->text('message');
            $table->string('honeypot', 255)->nullable(); // spam protection
            $table->string('ip_address', 45)->nullable();
            $table->string('status', 20)->default('new'); // new, read, replied
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
