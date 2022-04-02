<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;

class CafeController extends Controller
{
    //
    public function index(){
        $cafes = Cafe::all();
        return view('layout.cafe',compact('cafes'));
    }
}
