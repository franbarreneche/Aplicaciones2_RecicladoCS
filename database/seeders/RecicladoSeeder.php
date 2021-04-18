<?php

namespace Database\Seeders;

use App\Models\Reciclado;
use Illuminate\Database\Seeder;

class RecicladoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reciclado::factory(20)->create();
    }
}
