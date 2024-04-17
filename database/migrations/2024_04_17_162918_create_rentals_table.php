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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('clothes_id')->constrained()->onDelete('cascade');
            $table->date('rental_date');
            $table->date('return_date');
            $table->enum('status', ['pending', 'active', 'returned'])->default('pending');
            $table->decimal('deposit', 8, 0);
            $table->decimal('total', 8, 0);
            $table->timestamps();
        });

        Schema::create('rental_items', function (Blueprint $table) {
            $table->foreignId('rental_id')->constrained('rentals')->onDelete('cascade');
            $table->foreignId('clothes_id')->constrained('clothes')->onDelete('cascade');
            $table->integer('quantity')->default(1);
            $table->decimal('subtotal', 8, 0);
            $table->primary(['rental_id', 'clothes_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
        Schema::dropIfExists('rental_items');
    }
};
