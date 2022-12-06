<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'slug' => $this->faker->slug(),
            'status' => 'Dibutuhkan!',
            'posisi' => $this->faker->jobTitle(),
            'gender' => 'Laki-laki',
            'status_kerja' => 'full-time',
            'gaji' => '1-2 Juta',
            // 'body' => '<p>' . implode('</p><p>',$this->faker->paragraphs(mt_rand(5,10)) . '</p>')
            'kualifikasi' => collect($this->faker->paragraphs(mt_rand(1,2)))
                    ->map(function($p) {
                        return "<p>$p</p>";
                    })->implode(''),
            'deskripsi' => collect($this->faker->paragraphs(mt_rand(1,2)))
                    ->map(function($p) {
                        return "<p>$p</p>";
                    })->implode(''),
            'pinned' => 'no',
            'user_id' => mt_rand(1,3),
            'company_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,2),
            'study_id' => mt_rand(1,4),
            'location_id' => mt_rand(1,4)
        ];
    }
}
