<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\galeri;
use Illuminate\Support\Facades\DB;

class galeriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeris = DB::table('galeris')->get();
        return view('admin/galeri.galeri',["title" => "Galeri"], compact('galeris'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin/galeri.create');
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
            'name'          => 'required',
            'dokumentasi'   => 'required',
            'tempat'        => 'required',
            'jenis_bantuan' => 'required',
            'jumlah'        => 'required'
        ]);

        $image = $request->file('dokumentasi')->getClientOriginalName();
        $request->file('dokumentasi')->move('public/dokumentasi', $image);

        galeri::create([
            'name'           =>$request->get('name'),
            'dokumentasi'    =>$image,
            'tempat'         =>$request->get('tempat'),
            'jenis_bantuan'  =>$request->get('jenis_bantuan'),
            'jumlah'         =>$request->get('jumlah'),
        ]);
        return redirect('/admin/galeri')->with('success', 'Dokumentasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(galeri $galeri)
    {
        $galeri = galeri::find($galeri);
        return view('admin/galeri.detail', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\galeri $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(galeri $galeri)
    {
        $galeri = galeri::find($galeri);
        return view('admin/galeri.edit', compact('galeri'));

        // $image = $request->file('dokumentasi')->getClientOriginalName();
        // $request->file('dokumentasi')->move('public/dokumentasi', $image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\galeri $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          => 'required',
            'dokumentasi'   => 'required',
            'tempat'        => 'required',
            'jenis_bantuan' => 'required',
            'jumlah'        => 'required'
        ]);

        $image = $request->file('dokumentasi')->getClientOriginalName();
        $request->file('dokumentasi')->move('public/dokumentasi', $image);

        $itemgaleri = Galeri::findOrFail($id);//cari berdasarkan id = $id,

            $inputan = $request->all();
            $inputan['dokumentasi'] = $image;
            $itemgaleri->update($inputan);

      return redirect('/admin/galeri')->with('success', 'Dokumentasi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(galeri $galeri)
    {
        $galeri->delete();
        return redirect('/admin/galeri')->with('success', 'Dokumentasi berhasil dihapus');
    }
}
