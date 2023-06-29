<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $table = "ventas";

    protected $fillable = [
        "imagen",
        "nombre_del_producto",
        "cantidad_de_fruto",
        "precio",
        "persona_id"
    ];

    public function factura(){
        return $this->belongsTo(Factura::class,'Factura_id');
    }

    public function persona() {
        return $this->belongsTo(Persona::class,'Persona_id');
    }


}
?>