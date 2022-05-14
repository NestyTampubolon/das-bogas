<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;
use App\Models\sosial_media;


class CafeController extends Controller
{
    //
    public function index(){
        $instagram = sosial_media::where('id_sosialmedia',1)->value('hyperlink');
        $twitter = sosial_media::where('id_sosialmedia',2)->value('hyperlink');
        $youtube = sosial_media::where('id_sosialmedia',3)->value('hyperlink');
        $facebook = sosial_media::where('id_sosialmedia',4)->value('hyperlink');
        $cafes = Cafe::paginate(12)->withQueryString();
        return view('layout.cafe',compact('cafes','instagram','twitter','youtube','facebook'));
    }
}
