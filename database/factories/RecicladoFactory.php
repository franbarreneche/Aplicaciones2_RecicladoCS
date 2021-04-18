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
        $centro_id = random_int(1,Centro::all()->count());
        return [
            "transporte" => Reciclado::TRANSPORTES[random_int(0,3)],
            "objeto" => Reciclado::OBJETOS[random_int(0,2)],
            "fecha_recoleccion" => $this->faker->date("Y-m-d"),
            "fecha_contacto" => $this->faker->date("Y-m-d"),
            "ciudadano_id" => random_int(1,Ciudadano::all()->count()),
            "recolector_id" => random_int(1,Ciudadano::all()->count()),
            "centro_id" => $centro_id
        ];
    }
}
