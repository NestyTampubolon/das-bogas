<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KeranjangProduk;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\sosial_media;

class ProdukDetailController extends Controller
{
    //
    public function index($id)
    {
        $instagram = sosial_media::where('id_sosialmedia',1)->value('hyperlink');
        $twitter = sosial_media::where('id_sosialmedia',2)->value('hyperlink');
        $youtube = sosial_media::where('id_sosialmedia',3)->value('hyperlink');
        $facebook = sosial_media::where('id_sosialmedia',4)->value('hyperlink');
        $produks = Produk::find($id);
        return view('layout.produkdetail', compact('produks','instagram','twitter','youtube','facebook'));
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
        Alert::success('Success', 'Pesanan Anda berhasil disimpan di Keranjang Produk!');
        $produks->save();

       
        return redirect()->back()->with('success', "Pesanan Anda berhasil disimpan di Keranjang Produk!");
    }
}
