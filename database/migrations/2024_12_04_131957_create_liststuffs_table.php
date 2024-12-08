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
        Schema::create('liststuffs', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('image_list', 500);
            $table->timestamps();
            
             // Definisi relasi
             $table->foreignId('service_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liststuffs');
    }
};
