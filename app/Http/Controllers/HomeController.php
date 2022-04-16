<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Layanan;
use App\Models\sosial_media;
use App\Models\Galeri;
use App\Models\Testimoni;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produks = Produk::inRandomOrder()->limit(8)->get();
        $layanans = Layanan::inRandomOrder()->limit(8)->get();
        $galeris =  Galeri::all();
        $testimonis = DB::table('testimoni')
        ->join('users', 'testimoni.id_customer', '=', 'users.user_id')
        ->get();
        return view('layout.home',compact('produks','layanans','galeris','testimonis'));
    }

    public function sosial_media(){
        $Instagrams = sosial_media::where('id_sosialmedia',1)->first();
        return view('layout.footer',compact('instagrams'));
    }
}
