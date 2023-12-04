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

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('SKU');
            // $table->unsignedBigInteger('categoryId');
            $table->foreignId('categoryId')->constrained('product_categories')->onDelete('RESTRICT')->onUpdate('cascade');
            // $table->foreign('categoryId')->references('id')->on('categories')->onDelete('RESTRICT')->onUpdate('cascade');

            
            // $table->unsignedBigInteger('inventoryId');
            $table->foreignId('inventoryId')->constrained('product_inventories')->onDelete('RESTRICT')->onUpdate('cascade');
            // $table->foreign('inventoryId')->references('id')->on('inventories')->onDelete('RESTRICT')->onUpdate('cascade');

            // $table->unsignedBigInteger('discountId');
            $table->foreignId('discountId')->constrained('discounts')->onDelete('RESTRICT')->onUpdate('cascade');
            // $table->foreign('discountId')->references('id')->on('discounts')->onDelete('RESTRICT')->onUpdate('cascade');

            // $table->timestamp('modified_at')->nullable();
            // $table->timestamp('deleted_at')->nullable();
            $table->text('img')->nullable();
            $table->string('shortDescription')->nullable();
            $table->text('longDescription')->nullable();
            $table->string('cartDescription')->nullable();
            $table->float('weight')->nullable();
            $table->float('price')->nullable();
            $table->text('img1')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->timestamps();

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
