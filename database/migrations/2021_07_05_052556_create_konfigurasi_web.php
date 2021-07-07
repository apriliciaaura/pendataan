<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonfigurasiWeb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfigurasi_web', function (Blueprint $table) {
            $table->bigIncrements('id_web');
            $table->string('nama_web', 255);
            $table->string('alamat_web', 255);
            $table->string('telepon', 20);
            $table->string('email', 100);
            $table->string('alamat_halaman_web', 255);
            $table->string('keyword', 255);
            $table->string('deskripsi_web', 255);
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
        Schema::dropIfExists('konfigurasi_web');
    }
}
