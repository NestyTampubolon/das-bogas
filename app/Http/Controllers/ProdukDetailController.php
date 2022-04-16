<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KeranjangProduk;

class ProdukDetailController extends Controller
{
    //
    public function index($id)
    {
        $produks = Produk::find($id);
        return view('layout.produkdetail', compact('produks'));
    }

    public function simpanpesanan(Request $request)
    {
        $stok = $request->stok;
        $this->validate(
            $request,
            [
                'stok' => 'required',
                'kuantitas' => 'required|numeric|min:1|max:'.$stok
            ]
        );

        $keranjang = new KeranjangProduk();
        $keranjang->id_produk = $request->input('id_produk');
        $keranjang->kuantitas = $request->input('kuantitas');
        $keranjang->total = $request->input('kuantitas') * $request->input('harga');
        $keranjang->id_customer = auth()->id();
        $keranjang->save();

        $produks = Produk::find($request->id_produk);
        $produks->stok = $produks->stok - $request->kuantitas;
        $produks->save();
        return redirect()->back()->with('success', "Pesanan Anda berhasil disimpan di keranjang!");;
    }
}
