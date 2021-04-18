<?php

namespace Database\Seeders;

use App\Models\Centro;
use Illuminate\Database\Seeder;

class CentroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Centro::create([
            "nombre" => "Planta de Reciclado de Cnel. Suárez",
            "horario" => "9 a 15hs",
            "telefono" => "2926-223344",
            "sigla" => "PRS",
            "coordinador_id" => random_int(2,19)
        ]);
        Centro::create([
            "nombre" => "Centro de la Cooperativa Amanecer",
            "horario" => "9 a 15hs",
            "telefono" => "2926-552211",
            "sigla" => "CCA",
            "coordinador_id" => random_int(2,19)
        ]);
        Centro::create([
            "nombre" => "Planta de Tratamiento Eco Huanguelén",
            "horario" => "9 a 15hs",
            "telefono" => "2926-112277",
            "sigla" => "PEH",
            "coordinador_id" => random_int(2,19)
        ]);
        Centro::create([
            "nombre" => "Delegación Municipal de Snata María",
            "horario" => "9 a 15hs",
            "telefono" => "2926-771199",
            "sigla" => "DSM",
            "coordinador_id" => random_int(2,19)
        ]);
    }
}
