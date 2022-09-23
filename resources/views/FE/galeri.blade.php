@extends('FE.layout.index')


@section('content')
<div class="bg0 m-t-120 p-b-50">
  <div class="container">
    <div class="p-b-20">
        <h3 class="ltext-103 txt-center cl5">Galeri</h3>
      </div>
      <div class="row isotope-grid">
        @foreach($galeris as $galeri)
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="{{ asset('public/dokumentasi/'.$galeri->dokumentasi)  }}" style="width: 350px;" height="250px;" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> {{
                  $galeri->name }} </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
  </div>
</div>
@endsection
