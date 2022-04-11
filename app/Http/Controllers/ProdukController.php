<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    //
    public function index(){
        $produks = Produk::all();
        return view('layout.produk', compact('produks'));
    }

    public function search(Request $request){
        $kategori = $request->kategori;

        $produks = Produk::where('kategori','LIKE','%'.$kategori.'%')->get();
        return view('layout.produk', compact('produks'));
    }
}
