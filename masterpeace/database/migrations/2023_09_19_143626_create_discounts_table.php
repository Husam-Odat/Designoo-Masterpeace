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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            // $table->id()->foreign('products.discountId');
            $table->string('name');
            $table->text('description');
            $table->float('discountPercent')->default('1');
            $table->integer('active');
            // $table->timestamp('created_at')->nullable();
            // $table->timestamp('modified_at')->nullable();
            // $table->timestamp('deleted_at')->nullable();
            $table->text('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
