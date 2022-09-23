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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->Integer('stok');
            $table->string('size');
            $table->string('kondisi');
            $table->string('deskripsi');
            $table->Integer('harga');
            $table->Integer('harga_asli');
            $table->Integer('donasi');
            $table->boolean('status_pembayaran')->nullable()->default(0);
            $table->string('bukti_tf');
            $table->string('alamat');
            $table->UnsignedBigInteger('user_id');
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
        Schema::dropIfExists('pesanans');
    }
};
