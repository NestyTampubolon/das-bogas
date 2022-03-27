<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;

class DaftarCafeController extends Controller
{
    //
    public function index()
    {
        $daftarcafes = Cafe::all();
        return view('admin.cafe.daftarcafe', compact('daftarcafes'));
    }

    public function tambah()
    {
        return view('admin.cafe.tambahdaftarcafe');
    }

    public function store(Request $request)
    {
        $daftarcafe = new Cafe();
        $daftarcafe->nama = $request->nama;
        $daftarcafe->harga_cafe = $request->harga_cafe;
        $daftarcafe->kategori = $request->kategori;
        $daftarcafe->save();
        return redirect('daftarcafe');
    }

    public function edit($id_cafe)
    {
        $editcafes = Cafe::find($id_cafe);
        return view('admin.cafe.editdaftarcafe', compact('editcafes'));
    }

    public function update(Request $request, $id_cafe)
    {
        $update = cafe::find($id_cafe);
        $update->nama = $request->nama;
        $update->harga_cafe = $request->harga_cafe;
        $update->kategori = $request->kategori;
        $update->save();

        return redirect('daftarcafe');
    }

    public function delete($id_cafe)
    {
        $deletecafe = Cafe::find($id_cafe);
        if ($deletecafe->delete()) {
            return redirect()->back();
        }
    }
}
