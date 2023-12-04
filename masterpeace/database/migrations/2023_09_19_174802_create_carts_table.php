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

        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('productId');
            $table->foreignId('productId')->constrained('products')->onDelete('RESTRICT')->onUpdate('cascade');
            $table->integer('quantity');
            // $table->timestamp('created_at')->nullable();
            // $table->timestamp('modified_at')->nullable();
// ===========================
            $table->foreignId('userId')->constrained('users')->onDelete('RESTRICT')->onUpdate('cascade');
            //Or
            // $table->foreignId('userId')->constrained('users');
            //Or
            // $table->unsignedBigInteger('userId');
            // $table->foreign('userId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
// =============================
            $table->double('total');

            $table->foreignId('sessionId')->constrained('session_carts')->onDelete('RESTRICT')->onUpdate('cascade');
            // $table->unsignedBigInteger('sessionId');
            // $table->foreign('sessionId')->references('id')->on('session_carts')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
