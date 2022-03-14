<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class DaftarLayananController extends Controller
{
    //
    public function index()
    {
        $daftarlayanans = Layanan::all();
        return view('admin.daftarlayanan', compact('daftarlayanans'));
    }

    public function tambah()
    {
        return view('admin.tambahdaftarlayanan');
    }

    public function store(Request $request)
    {
        $daftarlayanan = new Layanan();
        $daftarlayanan->jenisservice = $request->jenisservice;
        $daftarlayanan->harga_tipea = $request->harga_tipea;
        $daftarlayanan->harga_tipeb = $request->harga_tipeb;


        if ($request->hasFile('gambar_layanan')) {
            $file = $request->file('gambar_layanan')->getClientOriginalName();
            $request->file('gambar_layanan')->move('gbr_layanan', $file);
            $daftarlayanan->gambar = $file;
        }
        $daftarlayanan->save();
        return redirect('daftarlayanan');
    }

    public function edit($id_layanan)
    {
        $editlayanans = Layanan::find($id_layanan);
        return view('admin.editdaftarlayanan', compact('editlayanans'));
    }

    public function update(Request $request, $id_layanan)
    {
        $update = Layanan::find($id_layanan);
        if ($request->hasFile('gambar_layanan')) {
            $file = $update->gambar;
            $file = $request->file('gambar_layanan')->getClientOriginalName();
            $request->file('gambar_layanan')->move('gbr_layanan', $file);
            $update->gambar_layanan = $file;
            
        }
        $update->jenisservice = $request->jenisservice;
        $update->harga_tipea = $request->harga_tipea;
        $update->harga_tipeb = $request->harga_tipeb;
        $update->save();

        return redirect('daftarlayanan');
    }

    public function delete($id_layanan)
    {
        $deletelayanan = Layanan::find($id_layanan);
        if ($deletelayanan->delete()) {
            return redirect()->back();
        }
    }
}
