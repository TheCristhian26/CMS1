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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->String('nombre_del_producto')->nullable();
            $table->longText('imagen')->nullable();
            $table->float('cantidad_de_fruto')->nullable();
            $table->float('precio_de_fruto')->nullable();
            $table->unsignedBigInteger('Persona_id')->index();
            $table->timestamps();

            $table->foreign('Persona_id')->references('id')->on('persona')
            ->onUpdate('cascade')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
