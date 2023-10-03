<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Pengguna;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nama' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('a'),
                'level' => 1
            ],
            [
                'nama' => 'kasir1',
                'email' => 'kasir1@gmail.com',
                'password' => bcrypt('a'),
                'level' => 2
            ],
            [
                'nama' => 'kasir2',
                'email' => 'kasir2@gmail.com',
                'password' => bcrypt('a'),
                'level' => 2
            ]
        ];

        foreach ($user as $key => $value) {
            Pengguna::create($value);
        }
    }
}
