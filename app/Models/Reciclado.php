<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reciclado extends Model
{
    use HasFactory;

    const TRANSPORTES = ["PIE","AUTO","MOTO","CAMIONETA"];
    const OBJETOS = ["CHATARRA","ELECTRONICO", "OTRO"];


    // relaciones
    public function ciudadano() {
        return $this->belongsTo(Ciudadano::class);
    }

    public function recolector() {
        return $this->belongsTo(Ciudadano::class,"recolector_id");
    }

    public function centro() {
        return $this->belongsTo(Centro::class);
    }
}
