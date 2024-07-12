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
        Schema::create('projectionfilm', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained('movie')->onDelete('cascade');
            $table->dateTime('projection_datetime');
            $table->foreignId('salle_id')->constrained('salle')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projectionfilm');
    }
};
