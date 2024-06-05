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
        Schema::create('camioneros', function (Blueprint $table) {
            $table->id();
            $table->string('dni')->unique();
            $table->string('poblacion');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('direccion');
            $table->decimal('salario', 8, 2);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camioneros');
    }
};
