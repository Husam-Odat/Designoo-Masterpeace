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

        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            // $table->id()->foreign('products.categoryId');
            $table->string('name');
            $table->text('description');
            // $table->timestamp('created_at')->nullable();
            // $table->timestamp('modified_at')->nullable();
            // $table->timestamp('deleted_at')->nullable();
            $table->text('img');
            $table->timestamps();

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
