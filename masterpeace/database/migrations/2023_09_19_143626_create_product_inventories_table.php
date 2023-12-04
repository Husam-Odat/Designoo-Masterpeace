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

        Schema::create('product_inventories', function (Blueprint $table) {
            $table->id();
            // $table->id()->foreign('products.inventoryId');
            $table->integer('quantity');
            // $table->timestamp('created_at')->nullable();
            // $table->timestamp('modified_at')->nullable();
            // $table->timestamp('deleted_at')->nullable();
            $table->text('name');
            $table->timestamps();

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_inventories');
    }
};
