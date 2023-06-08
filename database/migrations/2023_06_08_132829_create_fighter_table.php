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
        Schema::create('fighter', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->decimal('age', 2, 0);
            $table->decimal('weight', 3, 0);
            $table->decimal('height', 3, 0);
            $table->string('experience', 300);
        });

        Schema::create('martial_art', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fighter');
        Schema::dropIfExists('martial_art');
    }
};
