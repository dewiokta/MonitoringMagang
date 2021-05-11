<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTambahanToMhssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mhss', function (Blueprint $table) {
            $table->unsignedBigInteger('nipp');
            $table->foreign('nipp')->references('nip')->on('kampuses');

            $table->unsignedBigInteger('kodePT');
            $table->foreign('kodePT')->references('kode_pt')->on('perusahaans');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mhss', function (Blueprint $table) {
            //
        });
    }
}
