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
            $table->string('age');
            $table->string('ville');
            $table->string('addresse');
            $table->string('artisan_job_category')->nullable();
            $table->string('artisan_cv')->nullable();
            $table->string('artisan_portfolio')->nullable();
            $table->string('client_type')->nullable();
            $table->string('client_website')->nullable();
            $table->integer('user_type')->default(1)->comment('1 admin,2 artisan, 3 client');
            $table->text('description');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->integer('code_verification');
            $table->boolean('verified')->default(0);
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
