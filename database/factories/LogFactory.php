<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'newspaper_id'=>random_int(1,10),
            'log_content'=>$this->faker->realText,


            //
        ];
    }
}
