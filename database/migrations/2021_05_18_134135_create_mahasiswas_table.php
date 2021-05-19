<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->bigIncrements('nim');

            $table->unsignedBigInteger('nipp');
            $table->foreign('nipp')->references('nip')->on('kampuses')->onDelete('cascade')->onUpdate('cascade');
           
            $table->unsignedBigInteger('kodePT');
            $table->foreign('kodePT')->references('kode_pt')->on('perusahaans')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('mahasiswas');
    }
}
