<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KeranjangProduk;
use App\Models\PemesananProduk;
use App\Models\PemesananProdukDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CheckoutProdukController extends Controller
{
    //
    public function index($id_customer)
    {

        $pesan = DB::table('keranjangproduk')
            ->join('users', 'keranjangproduk.id_customer', '=', 'users.user_id')
            ->join('produk', 'produk.id_produk', '=', 'keranjangproduk.id_produk')
            ->where('keranjangproduk.id_customer', '=', auth()->id())
            ->get();


        $total = DB::table('keranjangproduk')
            ->select(DB::raw('SUM(total) as total'))
            ->groupBy('id_customer')
            ->where('id_customer', '=', auth()->id())
            ->get();

        return view('layout.checkoutproduk', compact('pesan', 'total'));
    }



    public function storepemesananproduk(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama_penerima' => 'required',
                'alamat_penerima' => 'required',
                'bukti_pembayaran' => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->with('warning', "Gagal memproses. Silahkan coba kembali!");
        }
        
        $this->validate(
            $request,
            [
                'nama_penerima' => 'required',
                'alamat_penerima' => 'required',
                'bukti_pembayaran' => 'required'
            ]
        );
        $keranjang = KeranjangProduk::where('id_customer', auth()->id())->get();

        $pemesanan = new PemesananProduk();
        $pemesanan->id_customer =  auth()->id();
        $pemesanan->tanggal_pemesanan = now();
        $pemesanan->total_pembayaran = $request->total_harga;
        $pemesanan->nama_penerima = $request->nama_penerima;
        $pemesanan->alamat_penerima = $request->alamat_penerima;
        $pemesanan->status = "Verifikasi";
        
        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran')->getClientOriginalName();
            $request->file('bukti_pembayaran')->move('gbr_bukti_pembayaran', $file);
            $pemesanan->bukti_pembayaran = $file;
        }
        if ($pemesanan->save()) {
            foreach ($keranjang as $keranjangs) {
                $pemesanandetail = new PemesananProdukDetail();
                $pemesanandetail->kuantitas_pesan = $keranjangs->kuantitas;
                $pemesanandetail->total_harga = $keranjangs->total;
                $pemesanandetail->id_produk = $keranjangs->id_produk;
                $pemesanandetail->id_pemesananproduk = $pemesanan->id_pemesananproduk;
                $pemesanandetail->save();
            }

            $deletekeranjang = KeranjangProduk::where('id_customer', auth()->id());
            if ($deletekeranjang->delete()) {
            }
        }
        return redirect()->back()->with('success', "Pesanan Anda sedang diproses. Lihat Status Pemesanan!");
    }

    public function delete(Request $request, $id_keranjangproduk)
    {
        $delete = KeranjangProduk::find($id_keranjangproduk);
        $produk = $delete->id_produk;
        $kuantitas = $delete->kuantitas;
        $deleteproduks = Produk::find($produk);
        $deleteproduks->stok = $deleteproduks->stok + $kuantitas;
        $deleteproduks->save();
        if ($delete->delete()) {
            return redirect()->back()->with('success', "Berhasil menghapus pesanan!");
        }
    }
}
