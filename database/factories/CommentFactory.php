<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'content'=>$this->faker->realText,
            'user_id'=>random_int(1,11),
            'newspaper_id'=>random_int(1,10),
            'role'=>random_int(1,5),
            'status'=>random_int(1,4)
            //
        ];
    }
}
