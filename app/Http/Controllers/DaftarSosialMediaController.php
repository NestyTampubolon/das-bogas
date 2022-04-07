<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sosial_media;

class DaftarSosialMediaController extends Controller
{
    //
    public function index(){
        $sosials = sosial_media::all();
        return view('admin.daftarsosialmedia',compact('sosials'));
    }

    public function update(Request $request, $id_sosialmedia)
    {
        $update = sosial_media::find($id_sosialmedia);
        $update->hyperlink = $request->hyperlink;
        $update->save();

        return redirect()->back();
    }

    
}
