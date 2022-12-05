<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComentaryFactory extends Factory
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
            'comunity_post_id' => mt_rand(1,3),
            'comment' => 'Halo, ini komentar pertama Hahaha!'
        ];
    }
}
