<?php

namespace Database\Seeders;

use App\models\DetailPembelian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailPembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailPembelian::factory()->count(100)->create();
    }
}
