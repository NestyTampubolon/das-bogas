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
                'nama' => 'Indomie Goreng' ,
                'harga_cafe' => 15000,
                'kategori' => 'makanan'
            ],
        ]);
    }
}
