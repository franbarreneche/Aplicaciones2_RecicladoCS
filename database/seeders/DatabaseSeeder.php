<?php

namespace Database\Seeders;

use App\Models\Reciclado;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolSeeder::class,
            UserSeeder::class,
            CiudadanoSeeder::class,
            CentroSeeder::class,
            CentroCiudadanoSeeeder::class,
            RecicladoSeeder::class
            ]);
    }
}
