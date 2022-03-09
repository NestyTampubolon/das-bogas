<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarProdukController extends Controller
{
    //
    public function index(){
        return view('admin.daftarproduk');
    }
}
