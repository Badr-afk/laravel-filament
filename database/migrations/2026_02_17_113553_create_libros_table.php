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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');                                      // campo añadido
            $table->foreign('user_id')->references('id')->on('users');                  // campo añadido
            $table->unsignedBigInteger('autor_id');                                  // campo añadido
            $table->foreign('autor_id')->references('id')->on('autors');         // campo añadido
            $table->string('title');                                                    // campo añadido
            $table->text('body');                                                       // campo añadido
            $table->string('image');                                                    // campo añadido
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
