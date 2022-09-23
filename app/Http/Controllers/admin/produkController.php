<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\DB;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = DB::table('produks')->get();
        return view('admin/produk.produk',["title" => "Produk"], compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/produk.create');
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
            'gambar_produk' => 'required',
            'gambar_detail' => 'required',
            'gdetail1'      => 'required',
            'gdetail2'      => 'required',
            'nama_produk'   => 'required',
            'deskripsi'     => 'required',
            'kondisi'       => 'required',
            'ukuran'        => 'required',
            'stok'          => 'required',
            'harga'         => 'required',
            'harga_asli'    => 'required',
            'donasi'      => 'required',
        ]);

        $image = $request->file('gambar_produk')->getClientOriginalName();
        $request->file('gambar_produk')->move('public/gambar_produk', $image);

        $imagedet = $request->file('gambar_detail')->getClientOriginalName();
        $request->file('gambar_detail')->move('public/gambar_detail', $imagedet);

        $gdetail1 = $request->file('gdetail1')->getClientOriginalName();
        $request->file('gdetail1')->move('public/gdetail1', $gdetail1);

        $gdetail2 = $request->file('gdetail2')->getClientOriginalName();
        $request->file('gdetail2')->move('public/gdetail2', $gdetail2);

        $itemuser = $request->user();//ambil data user yang login
        $inputan = $request->all();
        produk::create([
            'gambar_produk' => $image,
            'gambar_detail'=> $imagedet,
            'gdetail1'=> $gdetail1,
            'gdetail2'=> $gdetail2,
            'nama_produk'   => $request->get('nama_produk'),
            'deskripsi'     => $request->get('deskripsi'),
            'kondisi'       => $request->get('kondisi'),
            'ukuran'        => $request->get('ukuran'),
            'stok'          => $request->get('stok'),
            'harga'         => $request->get('harga'),
            'harga_asli'    =>$request->get('harga_asli'),
            'donasi'        => $request->get('donasi'),
            'user_id' => $itemuser->id,

        ]);

        // produk::create($request->all());

        return redirect('/admin/produk')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  app\Models\produk $produk
     * @return \Illuminate\Http\Response
     */
    public function show(produk $produk)
    {
        $produk = produk::find($produk);
        return view('admin/produk.detail', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(produk $produk)
    {
        $produk = produk::find($produk);
        return view('admin/produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produk $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar_produk' => 'required',
            'gambar_detail'=> 'required',
            'gdetail1' => 'required',
            'gdetail2' => 'required',
            'nama_produk'   => 'required',
            'deskripsi'     => 'required',
            'kondisi'       => 'required',
            'ukuran'      => 'required',
            'stok'          => 'required',
            'harga'         => 'required'
        ]);

        $image = $request->file('gambar_produk')->getClientOriginalName();
        $request->file('gambar_produk')->move('public/gambar_produk', $image);

        $imagedet = $request->file('gambar_detail')->getClientOriginalName();
        $request->file('gambar_detail')->move('public/gambar_detail', $imagedet);

        $gdetail1 = $request->file('gdetail1')->getClientOriginalName();
        $request->file('gdetail1')->move('public/gdetail1', $gdetail1);

        $gdetail2 = $request->file('gdetail2')->getClientOriginalName();
        $request->file('gdetail2')->move('public/gdetail2', $gdetail2);

        $itemproduk = Produk::findOrFail($id);//cari berdasarkan id = $id,

            $inputan = $request->all();
            $inputan['gambar_produk' ] = $image;
            $inputan['gambar_detail'] = $imagedet;
            $inputan['gdetail1' ] = $gdetail1;
            $inputan['gdetail2'] = $gdetail2;
            $itemproduk->update($inputan);

         // jika data berhasil diupdate, akan kembali ke halaman utama
         return redirect('/admin/produk')
         ->with('success', 'Produk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk $produk)
    {
        $produk->delete();
        return redirect('/admin/produk')->with('success', 'Produk berhasil dihapus');
    }
}
