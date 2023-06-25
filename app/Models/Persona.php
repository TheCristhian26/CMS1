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
        "password"
    ];

    public function ventas(){
        return $this->hasMany(Persona::class,'Ventas_id');
    }
}
?>