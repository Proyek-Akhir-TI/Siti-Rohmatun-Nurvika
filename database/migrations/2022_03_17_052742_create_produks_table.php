<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->string('gambar_produk');
            $table->string('gambar_detail');
            $table->string('gdetail1');
            $table->string('gdetail2');
            $table->string('nama_produk');
            $table->string('deskripsi');
            $table->string('kondisi');
            $table->string('ukuran');
            $table->string('stok');
            $table->integer('harga');
            $table->integer('harga_asli');
            $table->integer('donasi');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        // Schema::table('produks',function(Blueprint $table){
        //     $table->foreign('user_id')->references('id')->on('users');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
};
