<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "producto";

    protected $fillable = [
        "nombre_del_producto",
    ];

    public function ventas(){
        return $this->hasMany(Ventas::class,'Ventas_id');
    }
}
?>