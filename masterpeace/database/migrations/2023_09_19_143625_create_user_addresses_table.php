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
        Schema::disableForeignKeyConstraints();

        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('addressLine1')->nullable();
            $table->string('addressLine2')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('postalCode')->nullable();
            $table->bigInteger('phone')->nullable();
            // $table->unsignedBigInteger('userId');
            // give error 
            $table->foreignId('userId')->constrained('users')->onDelete('RESTRICT')->onUpdate('cascade');
            // $table->foreignId('userId')->constrained('users')->onDelete('RESTRICT')->onUpdate('cascade');
            $table->timestamps();

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_addresses');
    }
};
