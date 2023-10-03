<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_produk' => fake()->randomElement(['Minyak', 'Gula', 'Sabun', 'Pasta Gigi', 'Sabun Cuci']),
            'jenis' => $this->faker->randomElement(['makanan', 'minuman', 'elektronik', 'olah raga', 'barang']),
            'kode' => 'P' . sprintf('%08d', $this->faker->unique()->numberBetween(1, 99999999)),
            'stok' => $this->faker->numberBetween(1, 1000),
            'harga' => $this->faker->numberBetween(1000, 1000000),
        ];
    }
}
