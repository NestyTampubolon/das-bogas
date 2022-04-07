<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeranjangLayanan;
use App\Models\Layanan;
use App\Models\PembookinganLayanan;
use App\Models\PembookinganLayananDetail;
use Illuminate\Support\Facades\DB;

class CheckoutLayananController extends Controller
{
    //
    public function index($id_customer)
    {

        $pesan = DB::table('keranjanglayanan')
            ->join('users', 'keranjanglayanan.id_customer', '=', 'users.user_id')
            ->join('layanan', 'layanan.id_layanan', '=', 'keranjanglayanan.id_layanan')
            ->where('keranjanglayanan.id_customer', '=', auth()->id())
            ->get();


        $total = DB::table('keranjanglayanan')
            ->select(DB::raw('SUM(harga) as total'))
            ->groupBy('id_customer')
            ->where('id_customer', '=', auth()->id())
            ->get();

            return view('layout.checkoutlayanan', compact('pesan', 'total'));    
    }

    public function storepembookinganlayanan(Request $request)
    {
        $keranjang = KeranjangLayanan::where('id_customer', auth()->id())->get();

        $pembookingan = new PembookinganLayanan();
        $pembookingan->id_customer =  auth()->id();
        $pembookingan->tanggal_pembookingan = $request->tanggal_pembookingan;
        $pembookingan->tipe_kendaraan = $request->tipe_kendaraan;
        $pembookingan->pukul = $request->pukul;
        $pembookingan->keluhan_service = $request->keluhan_service;
        $pembookingan->total_pembayaran = $request->total_pembayaran;
        $pembookingan->status = "Verifikasi";
        if ($pembookingan->save()) {
            foreach ($keranjang as $keranjangs) {
                $pembookingandetail = new pembookinganLayananDetail();
                $pembookingandetail->total_harga = $keranjangs->harga;
                $pembookingandetail->id_layanan = $keranjangs->id_layanan;
                $pembookingandetail->id_pembookinganLayanan = $pembookingan->id_pembookinganlayanan;
                $pembookingandetail->save();
            }

            $deletekeranjang = KeranjangLayanan::where('id_customer', auth()->id());
            if ($deletekeranjang->delete()) {
                return redirect('/');
            }
        }
        return redirect()->back()->with('error', "Pemesanan sedang di proses");
    }

    public function delete(Request $request, $id_keranjanglayanan)
    {
        $delete = KeranjangLayanan::find($id_keranjanglayanan);
        if ($delete->delete()) {
            return redirect()->back();
        }
    }
}
