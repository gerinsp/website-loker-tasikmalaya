<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComentReplayFactory extends Factory
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
            'comentary_id' => mt_rand(1,3),
            'comment' => 'Aku bales komen kamu loh, HAHAHA!'
        ];
    }
}
