<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Anggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function(Blueprint $table){
            $table->integer('anggota_id');
            $table->string('anggota_nama',50);
            $table->string('alamat');
            $table->enum('anggota_jk',['L','p']);
            $table->string('anggota_telp',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('anggota');
    }
}
