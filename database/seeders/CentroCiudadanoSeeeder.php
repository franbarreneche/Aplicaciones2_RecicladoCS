<?php

namespace Database\Seeders;

use App\Models\Centro;
use App\Models\Ciudadano;
use Illuminate\Database\Seeder;

class CentroCiudadanoSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cant_ciu = Ciudadano::all()->count();
        $centros = Centro::all();

        foreach($centros as $centro) {
            $recolectores = [];
            for($i = 0; $i<5; $i++) {
                $id = random_int(1,$cant_ciu);
                if($centro->coordinador_id != $id)
                    array_push($recolectores,$id); //solo lo pongo como recolector de ese centro, si no es coordinador
            }
            $centro->recolectores()->attach($recolectores);
        }
    }
}
