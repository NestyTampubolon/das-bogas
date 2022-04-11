<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    //
    public function index()
    {

        return view('layout.layanan', ["layanans" => Layanan::latest()->filter(request(['search']))->get()]);
    }
}
