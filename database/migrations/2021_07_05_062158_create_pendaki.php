<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaki extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaki', function (Blueprint $table) {
            $table->bigIncrements('id_pendaki');
            $table->string('nama', 255);
            $table->string('jenis_kelamin', 255);
            $table->string('jenis_identitas', 255);
            $table->string('no_identitas', 255);
            $table->string('alamat', 255);
            $table->string('no_hp', 255);
            $table->string('email', 255);
            $table->date('tanggal_berangkat');
            $table->date('tanggal_kembali');
            $table->string('status', 255);
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
        Schema::dropIfExists('pendaki');
    }
}
