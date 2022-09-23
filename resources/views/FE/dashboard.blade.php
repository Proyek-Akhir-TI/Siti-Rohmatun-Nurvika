@extends('FE.layout.index')
@extends('FE.layout.slider')

@section('content')
<div class="sec-banner bg0 p-t-30 p-b-10">
  <div class="container">
    <div class="p-b-20">
      <!-- <div class="col-md-12 col-lg-8"> -->
      <!-- <div class="p-t-10 p-r-115 p-r-15-lg p-r-0-md"> -->
      <h3 class="ltext-103 txt-center cl2 p-b-16">Sekilas Informasi</h3>

      <p class="stext-113 cl6 p-b-15">
        Uniqme Store Merupakan Toko yang menjual barang fashion bekas namun masih layak pakai yang biasanya disebut dengan thrift. uniqme store sudah dipasarkan melalui offline maupun media online seperti instaram dan juga whatsap.

      </p>
    </div>
  </div>
</div>

<section class="bg0 p-t-23 p-b-100">
  <div class="container">
    <div class="p-b-10">
      <h3 class="ltext-103 txt-center cl5">Galeri</h3>
    </div>
    <div class="row isotope-grid">
      @foreach($galeris as $galeri)
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="{{ asset('public/dokumentasi/'.$galeri->dokumentasi)  }}" style="width: 250px;" height="250px;" />
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l">
              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> {{
                $galeri->jenis_bantuan }} </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


<section class="bg0 p-t-23 p-b-100">
  <div class="container">
    <div class="p-b-10">
      <h3 class="ltext-103 txt-center cl5">Produk</h3>
    </div>
    <div class="row isotope-grid">
      @foreach($produks as $produk)
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="{{ asset('public/gambar_produk/'.$produk->gambar_produk)  }}" style="width: 250px;" height="250px;" />

            <a href="{{ url('detailProduk') }}/{{$produk->id}}"
              class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04  ">
              Detail Produk </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l">
              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> {{
                $produk->nama_produk }} </a>

              <span class="stext-105 cl3">{{ $produk->harga }} </span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
