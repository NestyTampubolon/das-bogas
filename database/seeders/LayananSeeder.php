<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Layanan::insert([
            [
                'jenisservice' => 'Tune Up',
                'harga_tipea' => 150000,
                'harga_tipeb' => 250000,
                'gambar_layanan' => 'AAA'
            ],
            [
                'jenisservice' => 'Turun Transmisi',
                'harga_tipea' => 320000,
                'harga_tipeb' => 55000,
                'gambar_layanan' => 'AAA'
            ],
            [
                'jenisservice' => 'Ganti Lahar Gantungan 4 Kopling',
                'harga_tipea' => 100000,
                'harga_tipeb' => 120000,
                'gambar_layanan' => 'AAA'
            ],
        ]);
    }
}
