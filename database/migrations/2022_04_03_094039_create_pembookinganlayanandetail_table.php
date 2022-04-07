<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembookinganlayanandetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembookinganlayanandetail', function (Blueprint $table) {
            $table->increments('id_pembookinganlayanandetail');
            $table->integer('id_layanan');
            $table->integer('id_pembookinganlayanan');
            $table->integer('total_harga');
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
        Schema::dropIfExists('pembookinganlayanandetail');
    }
}
