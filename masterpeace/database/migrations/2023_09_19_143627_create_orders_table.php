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

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('userId');
            $table->foreignId('userId')->constrained('users')->onDelete('RESTRICT')->onUpdate('cascade');
            $table->float('total');
            // $table->unsignedBigInteger('paymentId');
            $table->foreignId('paymentId')->constrained('payments')->onDelete('RESTRICT')->onUpdate('cascade');
            // $table->timestamp('created_at')->nullable();
            // $table->timestamp('modified_at')->nullable();
            // $table->unsignedBigInteger('shipmentId');
            $table->foreignId('shipmentId')->constrained('shipments')->onDelete('cascade')->onUpdate('cascade');
            // $table->integer('orderProduct_Id');
            $table->foreignId('orderProductId')->constrained('orderproducts')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
