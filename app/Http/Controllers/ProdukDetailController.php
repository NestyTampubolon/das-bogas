<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukDetailController extends Controller
{
    //
    public function index($id){
        $produks = Produk::find($id);
        return view('layout.produkdetail',compact('produks'));
    }
}
