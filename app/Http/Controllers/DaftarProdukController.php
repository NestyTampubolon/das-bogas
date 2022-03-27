<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class DaftarProdukController extends Controller
{
    //
    public function index(){
        $daftarproduks = Produk::all();
        return view('admin.produk.daftarproduk',compact('daftarproduks'));
    }

    public function tambah()
    {
        return view('admin.produk.tambahdaftarproduk');
    }

    public function store(Request $request)
    {
        $daftarproduk = new Produk();
        $daftarproduk->nama = $request->nama;
        $daftarproduk->harga = $request->harga;
        $daftarproduk->kategori = $request->kategori;
        $daftarproduk->kuantitas = $request->kuantitas;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('gbr_produk', $file);
            $daftarproduk->gambar = $file;
        }
        $daftarproduk->save();
        return redirect('daftarproduk');
    }

    public function edit($id_produk)
    {
        $editproduks = Produk::find($id_produk);
        return view('admin.produk.editdaftarproduk', compact('editproduks'));
    }

    public function update(Request $request, $id_produk)
    {
        $update = Produk::find($id_produk);
        if ($request->hasFile('gambar')) {
            $file = $update->gambar;
            $file = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('gbr_produk', $file);
            $update->gambar_produk = $file;
            
        }
        $update->nama = $request->nama;
        $update->harga = $request->harga;
        $update->kategori = $request->kategori;
        $update->kuantitas = $request->kuantitas;
        $update->save();

        return redirect('daftarproduk');
    }
}
