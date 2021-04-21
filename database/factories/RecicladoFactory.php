<?php

namespace Database\Factories;

use App\Models\Centro;
use App\Models\Ciudadano;
use App\Models\Reciclado;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecicladoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reciclado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $centro = Centro::all()->random();
        return [
            "transporte" => Reciclado::TRANSPORTES[random_int(0,3)],
            "objeto" => Reciclado::OBJETOS[random_int(0,2)],
            "fecha_recoleccion" => $this->faker->date("Y-m-d"),
            "fecha_contacto" => $this->faker->date("Y-m-d"),
            "ciudadano_id" => (Ciudadano::where('id',"!=",$centro->coordinador_id)->get())->random()->id,
            "recolector_id" => $centro->recolectores->random()->id,
            "centro_id" => $centro->id
        ];
    }
}
