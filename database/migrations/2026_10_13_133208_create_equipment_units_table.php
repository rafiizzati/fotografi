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
        Schema::create('equipment_units', function (Blueprint $table): void {
    $table->id();
    $table->foreignId('equipment_id')->constrained()->restrictOnDelete();
    $table->string('serial_number', 80)->unique();
    $table->enum('condition_status', ['good', 'maintenance', 'damaged'])->default('good');
    $table->timestamps(6);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_units');
    }
};
