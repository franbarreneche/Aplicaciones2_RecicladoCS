<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Ciudadano;
use App\Models\Centro;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\User::factory(10)->create();
       User::create([
           "name" => "Administrator",
           "email" => "admin@admin.com",
           "password" => Hash::make("123456"),
           "email_verified_at" => now(),
           "remember_token" => Hash::make(random_int(100,999)),
           "rol_id" => 1 //admin
       ]);
       User::create([
        "name" => "Juan Perez",
        "email" => "juan@juan.com",
        "password" => Hash::make("123456"),
        "email_verified_at" => now(),
        "remember_token" => Hash::make(random_int(100,999)),
        "rol_id" => 2 //municipal
        ]);

        $keys = Centro::select('coordinador_id')->get();
        $ciudadanos = Ciudadano::find($keys);
        foreach($ciudadanos as $ciudadano) {
            User::create([
                "name" => $ciudadano->nombre_completo,
                "email" => $ciudadano->nombre_completo."@gmail.com",
                "password" => Hash::make("123456"),
                "email_verified_at" => now(),
                "remember_token" => Hash::make(random_int(100,999)),
                "rol_id" => 3, //coordinador
                "ciudadano_id" => $ciudadano->id
                ]);
        }
    }
}
