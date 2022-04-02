<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Cafe::insert([
            [
                'nama' => 'Nasi Goreng Ayam',
                'harga_cafe' => 18000,
                'kategori' => 'makanan'
            ],
            [
                'nama' => 'Nasi Goreng Biasa',
                'harga_cafe' => 15000,
                'kategori' => 'makanan'
            ],
            [
                'nama' => 'Bihun Goreng',
                'harga_cafe' => 15000,
                'kategori' => 'makanan'
            ],
            [
                'nama' => 'Ifumie Goreng',
                'harga_cafe' => 15000,
                'kategori' => 'makanan'
            ],
            [
                'nama' => 'Indomie Goreng Hype Abis' ,
                'harga_cafe' => 15000,
                'kategori' => 'makanan'
            ],
            [
                'nama' => 'Indomie Goreng Ayam Geprek' ,
                'harga_cafe' => 15000,
                'kategori' => 'makanan'
            ],
            [
                'nama' => 'Indomie Goreng Ayam Sambal Matah' ,
                'harga_cafe' => 15000,
                'kategori' => 'makanan'
            ],
            [
                'nama' => 'Indomie Soto Medan' ,
                'harga_cafe' => 12000,
                'kategori' => 'makanan'
            ],
            [
                'nama' => 'Indomie Soto Seblak' ,
                'harga_cafe' => 12000,
                'kategori' => 'makanan'
            ],
            [
                'nama' => 'Indomie Soto Lamongan' ,
                'harga_cafe' => 12000,
                'kategori' => 'makanan'
            ],
            [
                'nama' => 'Dimsum Ayam/Udang' ,
                'harga_cafe' => 20000,
                'kategori' => 'makanan'
            ],
            [
                'nama' => 'Chicken Pop' ,
                'harga_cafe' => 12000,
                'kategori' => 'makanan'
            ],
            [
                'nama' => 'French Fires' ,
                'harga_cafe' => 12000,
                'kategori' => 'makanan'
            ],
            [
                'nama' => 'Pisang Krispy Cokelat Keju' ,
                'harga_cafe' => 12000,
                'kategori' => 'makanan'
            ],          
            [
                'nama' => 'Kopi Koktong' ,
                'harga_cafe' => 6000,
                'kategori' => 'minuman'
            ],
            [
                'nama' => 'White Coffee' ,
                'harga_cafe' => 6000,
                'kategori' => 'minuman'
            ],
            [
                'nama' => 'Capucino' ,
                'harga_cafe' => 6000,
                'kategori' => 'minuman'
            ],
            [
                'nama' => 'Coffeemix' ,
                'harga_cafe' => 6000,
                'kategori' => 'minuman'
            ],
            [
                'nama' => 'Tora Bika' ,
                'harga_cafe' => 6000,
                'kategori' => 'minuman'
            ],
            [
                'nama' => 'Kopi Ginseng' ,
                'harga_cafe' => 8000,
                'kategori' => 'minuman'
            ],
            [
                'nama' => 'Jus Alpukat' ,
                'harga_cafe' => 12000,
                'kategori' => 'jus'
            ],
            [
                'nama' => 'Jus Nenas' ,
                'harga_cafe' => 12000,
                'kategori' => 'jus'
            ],
            [
                'nama' => 'Jus Wortel' ,
                'harga_cafe' => 12000,
                'kategori' => 'jus'
            ],
            [
                'nama' => 'Jus Nenas Sawi' ,
                'harga_cafe' => 12000,
                'kategori' => 'jus'
            ],
            [
                'nama' => 'Air Jeruk' ,
                'harga_cafe' => 12000,
                'kategori' => 'jus'
            ]
        ]);
    }
}
