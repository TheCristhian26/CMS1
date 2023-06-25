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
            $table->String('Producto_nombre_del_producto')->index();
            $table->bigInteger('numero_de_ventas')->nullable();
            $table->longText('imagen')->nullable();
            $table->float('cantidad_de_fruto')->nullable();
            $table->float('precio_de_fruto')->nullable();
            $table->unsignedBigInteger('tipo_persona_id')->index();
            $table->String('Persona_name')->index();
            $table->unsignedBigInteger('Persona_cedula')->index();
            $table->timestamps();
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
