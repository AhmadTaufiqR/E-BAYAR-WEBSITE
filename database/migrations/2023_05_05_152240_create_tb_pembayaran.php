<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('tipe')->nullable(true);
            $table->integer('jumlah_bayar')->nullable(true);
            $table->date('awal_pembayaran')->nullable(true);
            $table->date('akhir_bayar')->nullable(true);
            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id')->on('tb_admin');
            $table->softDeletes();
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
        Schema::dropIfExists('tb_pembayaran');
    }
}
