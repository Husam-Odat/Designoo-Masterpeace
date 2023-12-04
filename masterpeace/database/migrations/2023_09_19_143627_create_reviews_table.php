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

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('userId');
            $table->foreignId('userId')->constrained('users')->onDelete('RESTRICT')->onUpdate('cascade');
            // $table->unsignedBigInteger('productId');
            $table->foreignId('productId')->constrained('products')->onDelete('RESTRICT')->onUpdate('cascade');
            $table->integer('review');
            $table->text('description');
            $table->timestamp('date');
            // $table->timestamp('created_at')->nullable();
            // $table->timestamp('modified_at')->nullable();
            $table->timestamps();

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
