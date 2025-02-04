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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('model'); // Hangi model loglandı
            $table->unsignedBigInteger('model_id'); // Model ID'si
            $table->json('before')->nullable(); // Güncelleme öncesi veri
            $table->json('after')->nullable();  // Güncelleme sonrası veri
            $table->string('action'); // create, update, delete
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
