<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class DaftarGaleriController extends Controller
{
    //
    public function index()
    {
        $daftargaleris = Galeri::all();
        return view('admin.galeri.daftargaleri', compact('daftargaleris'));
    }

    public function tambah()
    {
        return view('admin.galeri.tambahdaftargaleri');
    }

    public function store(Request $request)
    {
        $this ->validate($request, 
            [
                'judul' => 'required',
                'gambar' => 'required|mimes:jpeg,jpg,png,gif'
            ]
        );

        $daftargaleri = new Galeri();
        $daftargaleri->judul = $request->judul;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('gbr_galeri', $file);
            $daftargaleri->gambar = $file;
        }
        $daftargaleri->save();
        return redirect('daftargaleri');
    }

    public function edit($id_galeri)
    {
        $editgaleris = Galeri::find($id_galeri);
        return view('admin.galeri.editdaftargaleri', compact('editgaleris'));
    }

    public function update(Request $request, $id_galeri)
    {
        $validatedData = $request->validate(
            [
                'judul' => 'required',
                'gambar' => 'mimes:jpeg,jpg,png,gif'
            ]
        );
        $update = Galeri::find($id_galeri);
        if ($request->hasFile('gambar')) {
            $file = $update->gambar;
            $file = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('gbr_galeri', $file);
            $update->gambar = $file;
        }
        $update->judul = $request->judul;
        $update->save();

        return redirect('daftargaleri');
    }

    public function delete($id_galeri)
    {
        $deletegaleri = Galeri::find($id_galeri);
        if ($deletegaleri->delete()) {
            return redirect()->back();
        }
    }
}
