<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;


class DaftarTestimoniController extends Controller
{
    //
    public function index(){
        $testimonis = Testimoni::all();
        return view('admin.daftartestimoni',compact('testimonis'));
    }

    public function update(Request $request, $id_testimoni){
        $update = Testimoni::find($id_testimoni);
        $update->status = $request->status;
        $update-> save();
        
        return redirect('daftartestimoni')->with('success', "Status ulasan berhasil diubah!");   

    }

    public function delete($id_testimoni)
    {
        $deletetestimoni = Testimoni::find($id_testimoni);
        if ($deletetestimoni->delete()) {
            return redirect()->back()->with('success', "Status ulasan berhasil dihapus!");  
        }
    }
}
