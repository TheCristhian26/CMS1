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
        Schema::create('factura', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Persona_id')->index();
            $table->unsignedBigInteger('Ventas_id')->index();
            $table->timestamps();
            
            $table->foreign('Persona_id')->references('id')->on('persona')
            ->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('Ventas_id')->references('id')->on('ventas')
            ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura');
    }
};