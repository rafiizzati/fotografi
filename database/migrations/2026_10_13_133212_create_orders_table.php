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
       Schema::create('orders', function (Blueprint $table): void {
    $table->id();
    $table->string('order_number', 30)->unique();
    $table->string('customer_name', 120);
    $table->string('customer_phone', 30);
    $table->unsignedBigInteger('total_amount');
    $table->enum('status', ['pending', 'paid', 'completed', 'cancelled'])->default('pending');
    $table->timestamps(6);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
