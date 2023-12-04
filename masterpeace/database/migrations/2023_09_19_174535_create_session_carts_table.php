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

        Schema::create('session_carts', function (Blueprint $table) {
            $table->id();
            // $table->id()->foreign('carts.sessionId');
            // $table->unsignedBigInteger('userId');
            $table->foreignId('userId')->constrained('users')->onDelete('RESTRICT')->onUpdate('cascade');
            $table->float('total');
            // $table->timestamp('created_at')->nullable();
            // $table->timestamp('modified_at');
            $table->timestamps();

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_carts');
    }
};
