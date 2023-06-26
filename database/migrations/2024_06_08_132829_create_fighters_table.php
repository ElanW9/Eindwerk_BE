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
        Schema::create('fighters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('martial_arts_id')->constrained('martial_arts');
            $table->foreignId('images_id')->constrained('images');
            $table->string('username');
            $table->decimal('age', 2, 0);
            $table->decimal('weight', 3, 0);
            $table->decimal('height', 3, 0);
            $table->string('experience', 300);
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fighters');
    }
};
