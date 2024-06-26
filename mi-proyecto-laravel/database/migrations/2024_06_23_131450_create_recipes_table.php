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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->timestamp('fecha_publicacion')->nullable();
            $table->enum('nivel_dificultad', ['bajo', 'medio', 'alto']);
            $table->integer('tiempo_preparacion')->unsigned();
            $table->text('ingredientes');
            $table->string('autor');
            $table->text('instrucciones_preparacion');
            $table->string('imagen')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
