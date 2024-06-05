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
        Schema::create('camiones', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('modelo');
            $table->string('matricula')->unique();
            $table->integer('potencia');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camiones');
    }
};
