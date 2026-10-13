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
       Schema::create('equipment', function (Blueprint $table): void {
    $table->id();
    $table->string('name', 120);
    $table->unsignedBigInteger('daily_rental_fee_amount');
    $table->unsignedInteger('stock_qty')->default(0);
    $table->boolean('is_available')->default(true);
    $table->timestamps(6);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
