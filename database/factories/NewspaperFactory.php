<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewspaperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'name'=>$this->faker->name,
            'content'=>$this->faker->realText,
            'image'=>$this->faker->imageUrl,
            'user_id'=>random_int(1,11),
            'title_id'=>random_int(1,10),
            'publish_date'=>$this->faker->date,
            'views_count'=>random_int(1,5000),
            'status'=>random_int(1,4),

            //
        ];
    }
}
