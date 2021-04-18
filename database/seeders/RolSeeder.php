<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create(["nombre" => "admin"]);
        Rol::create(["nombre" => "municipal"]);
        Rol::create(["nombre" => "coordinador"]);
    }
}
