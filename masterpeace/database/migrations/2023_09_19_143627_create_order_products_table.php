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

        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            // $table->id()->foreign('orders.orderProduct_Id');
            // $table->unsignedBigInteger('productId');
            $table->foreignId('productId')->constrained('products')->onDelete('RESTRICT')->onUpdate('cascade');
            $table->integer('quantity');
            $table->float('price')->nullable();
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
        Schema::dropIfExists('order_products');
    }
};
