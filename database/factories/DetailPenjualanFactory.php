<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Penjualan;
use app\Models\Barang;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailPenjualan>
 */
class DetailPenjualanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $idJual = fake()->randomElement(Penjualan::select('id')->get());
        $idBg = fake()->randomElement(Barang::select('id')->get());
        $harga = Barang::select('harga_jual')->where('id', $idBg->id)->first();
        $jumlah = fake()->numberBetween(1, 20);

        return [
            'penjualan_id' => $idJual,
            'barang_id' => $idBg,
            'harga_jual' => $harga['harga_jual'],
            'jumlah' => $jumlah,
            'sub_total' => $harga->harga_jual * $jumlah,
        ];
    }
}
