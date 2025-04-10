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
            // $table->string('code');
            $table->string('email')->unique();
            // $table->string('app_code');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('name');
            $table->string('password');
            // $table->string('phone');
            // $table->string('account_type');
            // $table->string('login_ip');
            // $table->dateTime('last_login');
            // $table->boolean('status')->default(false);
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
