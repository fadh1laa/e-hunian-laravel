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
    Schema::create('rusunawa_facilities', function (Blueprint $table) {
        $table->id();
        $table->foreignId('rusunawa_id')->constrained('rusunawa');
        $table->foreignId('facility_id')->constrained('facilities');
        $table->timestamp('created_at');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rusunawa_facilities');
    }
};
