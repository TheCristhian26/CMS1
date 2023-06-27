<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = "persona";

    protected $fillable = [
        "name",
        "cedula",
        "apellido",
        "direccion",
        "email",
        "telefono",
        "password",
        "tipo_persona"
    ];

    public function ventas(){
        return $this->hasMany(Ventas::class,'Persona_id');
    }

    public function facturas(){
        return $this->hasMany(Factura::class,'Persona_id');
    }



}
?>