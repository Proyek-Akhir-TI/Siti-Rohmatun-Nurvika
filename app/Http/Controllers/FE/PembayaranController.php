<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pesanan;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_bayar=0;
        return view('FE.pembayaran',compact('total_bayar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        //
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
        $bukti_tf = $request->file('bukti_tf')->getClientOriginalName();
        $request->file('bukti_tf')->move('public/bukti_tf', $bukti_tf);

        $pesanan = pesanan::where('id', $id);
        $pesanan->update([
            'bukti_tf'=> $bukti_tf,

        ]);
        // $pesanan->status_pembayaran = 0 ;
        // $pesanan->update();

       return redirect('/produk');
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

    public function validasi($id){
        $pesanan = pesanan::where('id',$id)->first();
        $pesanan->status_pembayaran = true;
        $pesanan->update();
        return redirect('/admin/pesanan')->with('success', 'Pesanan berhasil di validasi');
    }

}
