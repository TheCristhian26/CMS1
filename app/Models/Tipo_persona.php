<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_persona extends Model
{
    use HasFactory;

    protected $table = "tipo_persona";

    protected $fillable = [
        "numero"
        
    ];

    

    public function personas(){
        return $this->hasMany(Persona::class,'_tipo_persona_id');
    }
}
?>