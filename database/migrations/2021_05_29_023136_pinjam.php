<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam', function(Blueprint $table){
            $table->integer('pinjam_id');
            $table->integer('buku_id');
            $table->integer('anggota_id');
            $table->string('petugas_nama',50);
            $table->date('tgl_pinjam');
            $table->date('tgl_jatuh_tempo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('pinjam');
    }
}
