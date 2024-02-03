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
        Schema::create('web_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('nid')->nullable();
            $table->string('image')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('verify_token')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('address')->nullable();
            $table->integer('status')->comment('0 = Inactive, 1 = Active');
            $table->integer('online')->comment('0 = Inactive, 1 = Active');
            $table->timestamp('login_at')->nullable();
            $table->timestamp('logout_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_users');
    }
};
