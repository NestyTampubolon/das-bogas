<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\KeranjangLayanan;

class LayananDetailController extends Controller
{
    //
    public function index($id){
        $layanans = Layanan::find($id);
        return view('layout.layanandetail',compact('layanans'));
    }

    public function simpanpesanan(Request $request){
        $keranjang = new KeranjangLayanan();
        $keranjang->id_layanan = $request->input('id_layanan');
        $keranjang->harga = $request->input('tipe_kendaraan');
        $keranjang->id_customer = auth()->id();
        $keranjang->save();
        return redirect()->back()->with('success', "Pesanan Anda berhasil disimpan di keranjang!");;
    }
}
