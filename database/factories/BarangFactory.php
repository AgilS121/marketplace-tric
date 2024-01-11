<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            //membuat faker body
            //mt_rand untuk random
            'nama_barang' => $this->faker->sentence(mt_rand(2,8)),
            'price' => mt_rand(100000,1000000),
            'slug' => $this->faker->slug(),
            //membuat paragraph
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'user_id' =>mt_rand(1,3),
            'category_id' => mt_rand(1,2)
        ];
    }
}

