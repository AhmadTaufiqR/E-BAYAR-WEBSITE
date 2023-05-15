<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('username', 25);
            $table->string('password');
            $table->string('nama', 100)->nullable(true);
            $table->char('no_telephone', 13)->nullable(true);
            $table->string('email', 100)->nullable(true);
            $table->string('alamat')->nullable(true);
            $table->string('gambar', 50)->nullable(true);
            $table->unsignedBigInteger('id_angkatan')->nullable(true);
            $table->foreign('id_angkatan')->references('id')->on('tb_angkatan');
            $table->unsignedBigInteger('id_kelas')->nullable(true);
            $table->foreign('id_kelas')->references('id')->on('tb_kelas');
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
        Schema::dropIfExists('tb_siswa');
    }
}
