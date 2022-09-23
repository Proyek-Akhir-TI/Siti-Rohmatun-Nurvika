<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
@extends('FE.layout.index')
{{-- @extends('FE.layout.topbar') --}}

@section('content')
<section class="bg0 p-t-50 p-b-60">
<div class="p-t-40 p-b-20">
    <div class="overlay-modal1 js-hide-modal1"></div>

    <div class="container">
      <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
        <button class="how-pos3 hov3 trans-04 js-hide-modal1">
          <img src="{{ asset('FE/images/icons/icon-close.png')}}" alt="CLOSE" />
        </button>

        <div class="row">
          <div class="col-md-6 col-lg-7 p-b-30">
            <div class="p-l-25 p-r-30 p-lr-0-lg">
              <div class="wrap-slick3 flex-sb flex-w">
                <div class="wrap-slick3-dots"></div>
                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
{{-- gambar det 1 --}}
                <div class="slick3 gallery-lb">
                  <div class="item-slick3" data-thumb="{{ asset('public/gambar_produk/'.$produk->gambar_produk) }}">
                    <div class="wrap-pic-w pos-relative">
                      <img src="{{ asset('public/gambar_produk/'.$produk->gambar_produk)  }}" alt="IMG-PRODUCT" />

                      {{-- <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                        href="{{ asset('public/gambar_produk/'.$produk->gambar_produk)  }}">
                        <i class="fa fa-expand"></i>
                      </a> --}}
                    </div>
                  </div>

                  <div class="item-slick3" data-thumb="{{ asset('public/gambar_detail/'.$produk->gambar_detail) }}">
                    <div class="wrap-pic-w pos-relative">
                      <img src="{{ asset('public/gambar_detail/'.$produk->gambar_detail) }}" alt="IMG-PRODUCT" />

                      {{-- <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                        href="{{  asset('public/gambar_detail/'.$produk->gambar_detail)}}">
                        <i class="fa fa-expand"></i> --}}
                      </a>
                    </div>
                  </div>

                  <div class="item-slick3" data-thumb="{{ asset('public/gdetail1/'.$produk->gdetail1) }}">
                    <div class="wrap-pic-w pos-relative">
                      <img src="{{ asset('public/gdetail1/'.$produk->gdetail1) }}" alt="IMG-PRODUCT" />

                      {{-- <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                        href="{{  asset('public/gdetail1/'.$produk->gdetail1)}}">
                        <i class="fa fa-expand"></i>
                      </a> --}}
                    </div>
                  </div>

                  <div class="item-slick3" data-thumb="{{ asset('public/gdetail2/'.$produk->gdetail2) }}">
                    <div class="wrap-pic-w pos-relative">
                      <img src="{{ asset('public/gdetail2/'.$produk->gdetail2) }}" alt="IMG-PRODUCT" />

                      {{-- <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                        href="{{  asset('public/gdetail2/'.$produk->gdetail2)}}">
                        <i class="fa fa-expand"></i> --}}
                      </a>
                    </div>
                  </div>
              </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 p-b-30">
            <div class="p-r-50 p-t-5 p-lr-0-lg">
              <h4 class="mtext-105 cl2 js-name-detail p-b-14"> {{$produk->nama_produk }}</h4>

              <span class="mtext-106 cl2"> {{$produk->harga}}</span>

              <p class="stext-102 cl3 p-t-23">Deskripsi : {{$produk->deskripsi}}</p>

              <p class="stext-102 cl3 p-t-23">Size: {{$produk->ukuran}}</p>

              <p class="stext-102 cl3 p-t-23">Kondisi: {{$produk->kondisi}}</p>

              <p class="stext-102 cl3 p-t-23">Stok: {{$produk->stok}}</p>


              <a href="{{route('checkout',$produk->id)}}" class="text-left btn btn-block btn-sm mt-3" style="background-color: rgb(208, 208, 221); border-radius: 8px;">
                    <span class="mtext-110 cl2 js-name-detail p-b-10">
                        pesan
                    </span>
                </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

