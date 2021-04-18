<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudadano extends Model
{
    use HasFactory;

    public function centro() {
        return $this->hasOne(Centro::class,"coordinador_id");
    }

    public function reciclados() {
        return $this->hasMany(Reciclado::class);
    }
}
