<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananDetailController extends Controller
{
    //
    public function index($id){
        $layanans = Layanan::find($id);
        return view('layout.layanandetail',compact('layanans'));
    }
}
