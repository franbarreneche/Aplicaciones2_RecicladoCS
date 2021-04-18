<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;

    public function coordinador() {
        return $this->belongsTo(Ciudadano::class,"coordinador_id");
    }

    public function recolectores() {
        return $this->belongsToMany(Ciudadano::class)->withTimestamps();
    }

    public function reciclados() {
        return $this->hasMany(Reciclado::class);
    }

}
