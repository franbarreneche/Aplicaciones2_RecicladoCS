<?php

namespace Database\Factories;

use App\Models\Ciudadano;
use Illuminate\Database\Eloquent\Factories\Factory;

class CiudadanoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ciudadano::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni' => random_int(20000000,55000000),
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName,
            'domicilio' => $this->faker->streetName.' '.$this->faker->buildingNumber,
            'telefono' => $this->faker->e164PhoneNumber
        ];
    }
}
