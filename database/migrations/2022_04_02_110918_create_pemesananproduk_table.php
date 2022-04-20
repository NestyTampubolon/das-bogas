<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananprodukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesananproduk', function (Blueprint $table) {
            $table->increments('id_pemesananproduk');
            $table->date('tanggal_pemesanan');
            $table->integer('total_pembayaran');
            $table->string('status',20);
            $table->integer('id_customer')->unsigned();
            $table->string('nama_penerima',100);
            $table->text('alamat_penerima');
            $table->string('bukti_pembayaran',500);
            $table->timestamps();
            $table->foreign('id_customer')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesananproduk');
    }
}
