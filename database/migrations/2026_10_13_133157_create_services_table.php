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
       Schema::create('services', function (Blueprint $table): void {
    $table->id();
    $table->string('name', 120);
    $table->text('description')->nullable();
    $table->unsignedBigInteger('base_price_amount');
    $table->boolean('is_available')->default(true);
    $table->timestamps(6);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
