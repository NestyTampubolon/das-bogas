<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Produk::insert([
            [
                'nama' => 'Wiper Blade Forch 24',
                'harga' =>  100000,
                'kategori' => 'sparepart',
                'kuantitas' => 5,
                'gambar' => 'aa'
            ]
        ]);
    }
}
