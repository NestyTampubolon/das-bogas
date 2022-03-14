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
            ]
        ]);
    }
}
