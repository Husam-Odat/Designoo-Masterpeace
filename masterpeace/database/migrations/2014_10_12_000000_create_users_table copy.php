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
            // $table->string('username')->unique()->nullable();
            $table->string('username')->nullable();
            $table->string('password');
            $table->string('name');
            $table->string('lastName')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->timestamp('modified_at')->nullable();
            // $table->string('email')->unique();
            $table->string('email')->nullable();
            $table->text('img')->nullable();
            $table->integer('role')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            // ==google==
            $table->string('social_id')->nullable();
            $table->string('social_type')->nullable();
            // ==google==
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
