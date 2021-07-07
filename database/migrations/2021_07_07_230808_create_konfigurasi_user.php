<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonfigurasiUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfigurasi_user', function (Blueprint $table) {
                $table->bigIncrements('id_user');
                $table->string('nama', 255);
                $table->string('username', 255);
                $table->string('email', 255);
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
        Schema::dropIfExists('konfigurasi_user');
    }
}
