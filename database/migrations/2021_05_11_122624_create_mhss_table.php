<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMhssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mhss', function (Blueprint $table) {
            $table->bigIncrements('nim');

            // $table->unsignedBigInteger('nipp');
            // $table->foreign('nipp')->references('nip')->on('kampuses');

            // $table->unsignedBigInteger('kodePT');
            // $table->foreign('kodePT')->references('kode_pt')->on('perusahaans');

            $table->string('nama_mhs');
            $table->string('ttl');
            $table->string('jurusan');
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
        Schema::dropIfExists('mhss');
    }
}
