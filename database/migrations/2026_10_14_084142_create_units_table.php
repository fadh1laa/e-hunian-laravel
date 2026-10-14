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
    Schema::create('units', function (Blueprint $table) {
        $table->id();
        $table->foreignId('rusunawa_id')->constrained('rusunawa');
        $table->string('unit_number', 30);
        $table->integer('floor');
        $table->decimal('area_m2', 6, 2);
        $table->integer('bedrooms');
        $table->decimal('monthly_price', 12, 2);
        $table->string('status', 30)->default('available');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
