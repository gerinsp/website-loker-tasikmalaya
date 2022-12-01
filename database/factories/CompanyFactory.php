<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name' => $this->faker->company(),
            'company_desc' => collect($this->faker->paragraphs(mt_rand(2,3)))
                    ->map(function($p) {
                        return "<p>$p</p>";
                    })->implode(''),
            'alamat' => $this->faker->address(),
            'email' => $this->faker->companyEmail(),
            'no_wa' => $this->faker->phoneNumber(),
            'formulir' => $this->faker->companyEmail(),
        ];
    }
}
