<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\pesanan;
use App\Models\kurir;
use App\Models\kota;
use App\Models\Keranjang;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class KeranjangCheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $checkout = produk::find($id);
        $kurir = kurir::pluck('nama_kurir','kurir');
        $kota = kota::pluck('nama_kota','kota_id');
        $data_kota=kota::all();


        return view('FE.keranjangcheckout',compact('checkout','kurir','kota','data_kota'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $produk = produk::where('id', $id)->first();
        $user = auth()->user()->id;
        $pesanan = pesanan::create([
            'nama_produk' => $produk->nama_produk,
            'size' => $produk->ukuran,
            'kondisi' => $produk->kondisi ,
            'stok'=> 1,
            'deskripsi' => $produk->deskripsi,
            'harga'=>$produk->harga,
            'bukti_tf' =>'',
            'harga_asli'=>$produk->harga_asli,
            'donasi'=>$produk->donasi,
            'user_id' =>$user

        ]);

        $produk->stok = $produk->stok - 1;
        $produk->update();

        $total_bayar = $produk->harga;

        return view('FE.pembayaran',compact('total_bayar','produk','pesanan', 'user'));
    }

    public function createAll(Request $request, $id)
    {
        $produk = produk::where('id', $id)->first();
        $user = auth()->user()->id;
        pesanan::create([
            'nama_produk' => $produk->nama_produk,
            'size' => $produk->ukuran,
            'kondisi' => $produk->kondisi ,
            'stok'=> 1,
            'deskripsi' => $produk->deskripsi,
            'harga'=>$produk->harga,
            'bukti_tf' =>'',
            'user_id' =>  $user,
            'harga_asli'=>$produk->harga_asli,
            'donasi'=>$produk->donasi

        ]);

        $produk->stok = $produk->stok - 1;
        $produk->update();

        Keranjang::where('produk_id', $id)->where('user_id', $user)->first()->delete();

        // return response()->json([
        //     'message' => "Pesanan Berhasil dibuat silakan lakukan pembayaran sesuai pesanan masing masing"
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $produk = produk::where('id', $id)->first();
        $detailBayar = produk::find($id);

        return view('FE.detailbayar',compact('detailBayar','produk'));

        // $cost = RajaOngkir::ongkosKirim([
        //     'origin'        => 42,     // ID kota/kabupaten banyuwangi
        //     'destination'   => $request->kota,      // ID kota/kabupaten tujuan
        //     'weight'        => 1 ,    // berat barang dalam gram
        //     'courier'       => $request->kurir    // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        // ])->get();


        // // dd($cost);

        // $biaya = $cost[0]['costs'][0]['cost'][0]; // ambil data biaya ongkir
        // $kurir = $cost[0]['name']; //ambil data nama kurir
        // $layanan = $cost[0]['costs'][0]['service']; // ambil data layanan yang dipakai
        // // // $jumlahBayar =


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
