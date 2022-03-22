<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jefe'=>$this->faker->name,
            'empresa'=>$this->faker->company,
            'direccion'=>$this->faker->address,

        ];
    }
}
