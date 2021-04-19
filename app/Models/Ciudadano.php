<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudadano extends Model
{
    use HasFactory;

    // accessors
    public function getNombreCompletoAttribute() {
        return "{$this->nombre} {$this->apellido}";
    }

    // relaciones
    public function centro() {
        return $this->hasOne(Centro::class,"coordinador_id");
    }

    public function reciclados() {
        return $this->hasMany(Reciclado::class);
    }
}
