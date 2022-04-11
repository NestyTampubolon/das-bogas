<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemesananProduk;
use Illuminate\Support\Facades\DB;
use App\Models\PemesananProdukDetail;
use App\Models\PembookinganLayananDetail;

class StatusPesananController extends Controller
{
    //
    public function index(){
        $pesan = DB::table('pemesananproduk')
        ->join('users', 'pemesananproduk.id_customer', '=', 'users.user_id')
        ->where('pemesananproduk.id_customer', '=', auth()->id())
        ->get();

        $booking = DB::table('pembookinganlayanan')
        ->join('users', 'pembookinganlayanan.id_customer', '=', 'users.user_id')
        ->where('pembookinganlayanan.id_customer', '=', auth()->id())
        ->get();

        return view('layout.statuspesanan',compact('pesan','booking'));
    }

    public function detail($id_pemesananproduk){
        $pemesanandetail = PemesananProdukDetail::find($id_pemesananproduk);
        $pemesanan = DB::table('pemesananproduk')
                    ->join('users', 'users.user_id','=','pemesananproduk.id_customer')
                    ->select('pemesananproduk.*','users.name','users.nomor_telephone')
                    ->where('pemesananproduk.id_pemesananproduk','=',$id_pemesananproduk)
                    ->get();
        $daftarjoin = DB::table('pemesananprodukdetail')
                    ->join('pemesananproduk', 'pemesananprodukdetail.id_pemesananproduk','=','pemesananproduk.id_pemesananproduk')
                    ->join('produk','pemesananprodukdetail.id_produk','=','produk.id_produk')
                    ->select('pemesananprodukdetail.*','produk.*')
                    ->where('pemesananprodukdetail.id_pemesananproduk','=',$id_pemesananproduk)
                    ->get();
        return view('layout.statuspesanandetail',compact('pemesanandetail','pemesanan','daftarjoin'));
    }

    public function detaillayanan($id_pembookinganlayanan){
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
        return view('layout.statuspesanandetaillayanan',compact('pembookingandetail','pembookingan','daftarjoin'));
    }
}
