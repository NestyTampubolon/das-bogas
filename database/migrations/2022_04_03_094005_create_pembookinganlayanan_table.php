<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembookinganlayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembookinganlayanan', function (Blueprint $table) {
            $table->increments('id_pembookinganlayanan');            
            $table->integer('total_pembayaran');
            $table->string('tipe_kendaraan', 100);
            $table->date('tanggal_pembookingan');
            $table->time('pukul');
            $table->string('status',100);
            $table->text('keterangan')->nullable();
            $table->text('keluhan_service');
            $table->integer('id_customer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembookinganlayanan');
    }
}
