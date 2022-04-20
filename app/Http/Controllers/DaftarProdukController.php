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
        $validatedData = $request->validate(
            [
                'nama' => 'required|unique:produk,nama',
                'harga' => 'required|integer',
                'kategori' => 'required',
                'stok' => 'required|integer',
                'gambar_produk' => 'required',
            ]
        );

        $daftarproduk = new Produk();
        $daftarproduk->nama = $request->nama;
        $daftarproduk->harga = $request->harga;
        $daftarproduk->kategori = $request->kategori;
        $daftarproduk->stok = $request->stok;

        if ($request->hasFile('gambar_produk')) {
            $file = $request->file('gambar_produk')->getClientOriginalName();
            $request->file('gambar_produk')->move('gbr_produk', $file);
            $daftarproduk->gambar = $file;
        }
        $daftarproduk->save();
        return redirect('daftarproduk')->with('success', "Produk berhasil ditambahkan!");
    }

    public function edit($id_produk)
    {
        $editproduks = Produk::find($id_produk);
        return view('admin.produk.editdaftarproduk', compact('editproduks'));
    }

    public function update(Request $request, $id_produk)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'harga' => 'required|integer',
                'kategori' => 'required',
                'stok' => 'required|integer',
                'gambar' => 'mimes:jpg,bmp,png'

            ]
        );
        $update = Produk::find($id_produk);
        if ($request->hasFile('gambar')) {
            $file = $update->gambar;
            $file = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('gbr_produk', $file);
            $update->gambar = $file;
            
        }
        $update->nama = $request->nama;
        $update->harga = $request->harga;
        $update->kategori = $request->kategori;
        $update->stok = $request->stok;
        $update->save();

        return redirect('daftarproduk')->with('success', "Produk berhasil diubah!");
    }

    public function delete($id_produk)
    {
        $deleteproduk = Produk::find($id_produk);
        if ($deleteproduk->delete()) {
            return redirect()->back()->with('success', "Produk berhasil dihapus!");
        }
    }
}
