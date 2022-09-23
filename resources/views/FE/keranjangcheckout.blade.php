<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

@extends('FE.layout.index')


@section('content')
    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-100 p-lr-0-lg">
            <a href="{{ url('/') }}" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4"> Pesan </span>
        </div>
    </div>

    <!-- Shoping Cart -->
    <form class="bg0 p-t-30 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-lr-auto m-b-50">
                    <div class="m-l-20 m-r-38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Produk</th>
                                    <th class="column-2">Nama Produk</th>
                                    <th class="column-3">Jumlah</th>
                                    <th class="column-4">Ukuran</th>
                                    <th class="column-5">Deskripsi</th>
                                    <th class="column-6">Harga</th>
                                    {{-- <th class="column-7">Jumlah Pesan</th>
                                    <th class="column-8">Total</th> --}}
                                </tr>

                                <tr class="table_row">
                                    <td class="column-1">
                                        <div class="how-itemcart1">
                                            <img src="{{ asset('public/gambar_produk/' . $checkout->gambar_produk) }}" />
                                            <p class="{{ $checkout->nama_produk }}"></p>
                                        </div>
                                    </td>
                                    <td class="column-2">{{ $checkout->nama_produk }}</td>
                                    <td class="column-3">{{ $checkout->stok }}</td>
                                    <td class="column-4">{{$checkout->ukuran}}</td>
                                    <td class="column-5">{{ $checkout->deskripsi }}</td>
                                    <td class="column-6">{{ $checkout->harga }}</td>
                                    {{-- <td class="column-7">{{ $jumlah }}</td> --}}
                                    {{-- <td class="column-8">
                                        Rp.{{ preg_replace('/\D/', '', $beli->harga_produk) * (int) $jumlah }}</td> --}}
                                </tr>

                            </table>

                        </div>

                        {{-- <form id="form-detail-pesan" method="get" action="{{ route('detailPesan', $produk->id) }}"> --}}


                    {{-- ongkir --}}
                    {{-- <select class="select2 form-control form-control-lg" name="kota_tujuan"  required=''>
                        <option value="">--Kota--</option>
                        @foreach ($kota as $kotas => $value)
                        <option value="{{$kotas}}">{{$value}}</option>
                        @endforeach
                    </select>

                    <select class="select2 form-control form-control-lg" name="kota_tujuan"  required=''>
                        <option value="">--Kurir--</option>
                        @foreach ($kurir as $kurirs => $value)
                        <option value="{{$kurirs}}">{{$value}}</option>
                        @endforeach
                    </select> --}}

                    {{-- <a onclick="alert('Silahkan Login terlebih dahulu')" href="{{ route('login') }}"
                        class="flex-c-m stext-101 cl0 size-105 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Bayar
                    </a> --}}

                                <a  href="{{ route('pesan',$checkout->id) }}"
                                    class="flex-c-m stext-101 cl0 size-105 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                    Bayar
                                </a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection

