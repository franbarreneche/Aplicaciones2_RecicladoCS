<?php

namespace Database\Seeders;

use App\Models\Centro;
use App\Models\Ciudadano;
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
            "coordinador_id" => Ciudadano::find(1)->id
        ]);
        Centro::create([
            "nombre" => "Centro de la Cooperativa Amanecer",
            "horario" => "9 a 15hs",
            "telefono" => "2926-552211",
            "sigla" => "CCA",
            "coordinador_id" => Ciudadano::find(2)->id
        ]);
        Centro::create([
            "nombre" => "Planta de Tratamiento Eco Huanguelén",
            "horario" => "9 a 15hs",
            "telefono" => "2926-112277",
            "sigla" => "PEH",
            "coordinador_id" => Ciudadano::find(3)->id
        ]);
        Centro::create([
            "nombre" => "Delegación Municipal de Santa María",
            "horario" => "9 a 15hs",
            "telefono" => "2926-771199",
            "sigla" => "DSM",
            "coordinador_id" => Ciudadano::find(4)->id
        ]);
        Centro::create([
            "nombre" => "Delegación Municipal de San José",
            "horario" => "9 a 15hs",
            "telefono" => "2926-992244",
            "sigla" => "DSJ",
            "coordinador_id" => Ciudadano::find(5)->id
        ]);
        Centro::create([
            "nombre" => "Delegación Municipal de Santa Trinidad",
            "horario" => "9 a 15hs",
            "telefono" => "2926-932115",
            "sigla" => "DST",
            "coordinador_id" => Ciudadano::find(6)->id
        ]);
        Centro::create([
            "nombre" => "Delegación Municipal de Pasman",
            "horario" => "9 a 15hs",
            "telefono" => "2926-826477",
            "sigla" => "DSP",
            "coordinador_id" => Ciudadano::find(7)->id
        ]);
        Centro::create([
            "nombre" => "Delegación Municipal de Cura Malal",
            "horario" => "9 a 15hs",
            "telefono" => "2926-645312",
            "sigla" => "DCM",
            "coordinador_id" => Ciudadano::find(8)->id
        ]);
        Centro::create([
            "nombre" => "Delegación Municipal de Villa Arcadia",
            "horario" => "9 a 15hs",
            "telefono" => "2926-978162",
            "sigla" => "DVA",
            "coordinador_id" => Ciudadano::find(9)->id
        ]);
    }
}
