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
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->String('name')->nullable();
            $table->string('apellido')->nullable();
            $table->bigInteger('cedula')->nullable();
            $table->string('direccion')->nullable();
            $table->string('password')->nullable();
            $table->enum('tipo_persona',['comprador','vendedor']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
