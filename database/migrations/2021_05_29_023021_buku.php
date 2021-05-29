<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Buku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function(Blueprint $table){
            $table->integer('buku_id');
            $table->string('buku_judul',50);
            $table->integer('kategori_id');
            $table->string('buku_deskripsi');
            $table->integer('buku_jumlah');
            $table->string('buku_cover',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('buku');
    }
}
