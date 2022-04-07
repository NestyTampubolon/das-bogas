<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;


class CafeController extends Controller
{
    //
    public function index(){
        $cafes = Cafe::paginate(12)->withQueryString();
        return view('layout.cafe',compact('cafes'));
    }
}
