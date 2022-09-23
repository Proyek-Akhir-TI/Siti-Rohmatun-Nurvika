<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;

class pesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            // $pesanans = pesanan::with('user')->paginate(5);
            if(auth()->user()->role == "admin"){
                $pesanans = pesanan::with('user')->paginate(5);
                }
                else{
                $pesanans = pesanan::with('user')->where('user_id', auth()->user()->id)->paginate(5);
                }
            // dd($pesanans);
            return view('admin/pesanan.pesanan',["title" => "Pesanan"], compact('pesanans'));
        }

        // $pesanans = DB::table('pesanans')->get();
        // return view('admin/pesanan.pesanan',["title" => "Pesanan"], compact('pesanans'));


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'size' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required',

        ]);

        // $pesanan=pesanan::create([
        pesanan::create([
            'nama_produk' => $request->get('nama_produk'),
            'size' => $request->get('size'),
            'kondisi' => $request->get('kondisi'),
            'deskripsi' => $request->get('deskripsi'),


        ]);

        // dd($pesanan);

        return redirect('/admin/pesanan')->with('success', 'Pesanan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  app\Models\pesanan $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(pesanan $pesanan)
    {
        $pesanan = pesanan::find($pesanan);
        return view('admin/pesanan.detail', compact('pesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  app\Models\pesanan $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(pesanan $pesanan)
    {
        $pesanan = pesanan::find($pesanan);
        return view('admin/pesanan.edit', compact('pesanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  app\Models\pesanan $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'size' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required',


        ]);

        // $pesanan->nama_konsumen = $request->nama_konsumen;
        // $pesanan->alamat_pengiriman = $request->alamat_pengiriman;
        // $pesanan->nama_produk= $request->nama_produk;
        // $pesanan->ukuran = $request->ukuran;
        // $pesanan->variasi= $request->variasi;
        // $pesanan->jumlah= $request->jumlah;
        // $pesanan->total_bayar = $request->total_bayar;
        // $pesanan->tanggal_pesan = $request->tanggal_pesan;
        // $pesanan->catatan_pesanan= $request->catatan_pesanan;
        // $pesanan->opsi_pengiriman= $request->opsi_pengiriman;
        // $pesanan->save();

        return redirect('/admin/pesanan')->with('success', 'Pesanan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pesanan $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect('/admin/pesanan')->with('success', 'Pesanan berhasil dihapus');
    }


}


