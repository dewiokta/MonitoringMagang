<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMhsMemilikiTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mhs_memiliki_tugas', function (Blueprint $table) {
            $table->unsignedBigInteger('nimm')->nullable();
            $table->foreign('nimm')->references('nim')->on('mahasiswas')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('kode_tgs')->nullable();
            $table->foreign('kode_tgs')->references('kode_tugas')->on('tugas')->onUpdate('cascade')->onDelete('cascade');

            $table->string('nilai');
            $table->text('komentar');
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
        Schema::dropIfExists('mhs_memiliki_tugas');
    }
}
