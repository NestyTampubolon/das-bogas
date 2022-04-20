<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Testimoni;

class AboutController extends Controller
{
    //
    public function index()
    {
        $pesan = DB::table('users')
            ->where('user_id', '=', auth()->id())
            ->get();
        return view('layout.about', compact('pesan'));
    }

    public function testimoni(Request $request)
    {
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'pesan' => 'required',
            ]
        );
        $testimoni = new Testimoni();
        $testimoni->judul = $request->judul;
        $testimoni->pesan = $request->pesan;
        $testimoni->id_customer = auth()->id();
        $testimoni->status = "Tidak Ditampilkan";
        $testimoni->save();
        return redirect('about')->with('success', "Ulasan Anda berhasil disampaikan!");
    }
}
