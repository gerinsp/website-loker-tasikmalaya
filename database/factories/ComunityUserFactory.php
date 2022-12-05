<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComunityUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1,3),
            'comunity_id' => mt_rand(1,3)
        ];
    }
}
