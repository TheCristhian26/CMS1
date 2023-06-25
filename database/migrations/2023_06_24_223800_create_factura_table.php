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
            $table->unsignedBigInteger('tipo_persona_id')->index();
            $table->unsignedBigInteger('Persona_id')->index();
            $table->String('Persona_name')->index();
            $table->unsignedBigInteger('Persona_cedula')->index();
            $table->unsignedBigInteger('Ventas_id')->index();
            $table->unsignedBigInteger('Ventas_numero_de_ventas')->index();
            $table->unsignedBigInteger('Ventas_precio')->index();
            $table->String('Producto_nombre_del_producto')->index();
            $table->timestamps();
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
