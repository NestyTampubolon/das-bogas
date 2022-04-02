<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Layanan;

class HomeController extends Controller
{
    //
    public function index(){
        $produks = Produk::inRandomOrder()->limit(5)->get();
        $layanans = Layanan::inRandomOrder()->limit(5)->get();
        return view('layout.home',compact('produks','layanans'));
    }
}
