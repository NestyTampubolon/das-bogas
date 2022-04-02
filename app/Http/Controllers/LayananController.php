<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    //
    public function index(){
        $layanans = Layanan::all();
        return view('layout.layanan',compact('layanans'));
    }
}
