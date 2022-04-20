<?php

namespace App\Http\Controllers;

use App\Models\PembookinganLayanan;
use App\Models\PembookinganLayananDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarPembookinganController extends Controller
{
    //
    public function index(){ 
        $pembookingans = DB::table('pembookinganlayanan')
        ->join('users', 'users.user_id','=','pembookinganlayanan.id_customer')
        ->select('users.name','pembookinganlayanan.*')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('admin.daftarpembookingan',compact('pembookingans'));
    }

    public function update(Request $request, $id_pembookinganlayanan){
        $update = PembookinganLayanan::find($id_pembookinganlayanan);
        $update->status = $request->status;
        $update->keterangan = $request->keterangan;
        $update-> save();
        
        return redirect('daftarpembookingan')->with('success', "Berhasil mengubah status pemesanan!");    

    }

    
    public function detail($id_pembookinganlayanan){
        $pembookingandetail = PembookinganLayananDetail::find($id_pembookinganlayanan);
        $pembookingan = DB::table('pembookinganlayanan')
                    ->join('users', 'users.user_id','=','pembookinganlayanan.id_customer')
                    ->select('pembookinganlayanan.*','users.name','users.nomor_telephone')
                    ->where('pembookinganlayanan.id_pembookinganlayanan','=',$id_pembookinganlayanan)
                    ->get();
        $daftarjoin = DB::table('pembookinganlayanandetail')
                    ->join('pembookinganlayanan', 'pembookinganlayanandetail.id_pembookinganlayanan','=','pembookinganlayanan.id_pembookinganlayanan')
                    ->join('layanan','pembookinganlayanandetail.id_layanan','=','layanan.id_layanan')
                    ->select('pembookinganlayanandetail.*','layanan.*')
                    ->where('pembookinganlayanandetail.id_pembookinganlayanan','=',$id_pembookinganlayanan)
                    ->get();
        return view('admin.daftarpembookingandetail',compact('pembookingandetail','pembookingan','daftarjoin'));
    }

    public function delete($id_pembokinganlayanan)
    {
        $deletelayanan = PembookinganLayanan::find($id_pembokinganlayanan);
        if ($deletelayanan->delete()) {
            return redirect()->back();
        }
    }
}
