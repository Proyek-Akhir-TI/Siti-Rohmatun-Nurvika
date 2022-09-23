@extends('FE.layout.index')

@section('content')
<!-- breadcrumb -->
<div class="container">
  <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
    <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
      Home
      <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
    </a>

    <span class="stext-109 cl4"> Shoping Cart </span>
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
                                     <th class="column-0"></th>
                                    <th class="column-1">Gambar Produk</th>
                                    <th class="column-2">Nama Produk</th>
                                    <th class="column-3">Jumlah</th>
                                    <th class="column-4">Ukuran</th>
                                    <th class="column-5">Deskripsi</th>
                                    <th class="column-6">Harga</th>
                                {{-- <th class="column-4">Quantity</th> --}}
                            </tr>
                            @foreach ($keranjangs as $item)
                            <tr class="table_row">
                                <td class="column-0"><input type="checkbox" class="checkbox" id="checkbox-{{$item->produk->id}}"></td>
                                <td class="column-1">
                                <div class="how-itemcart1"><img src="{{asset('public/gambar_produk/'.$item->produk->gambar_produk)}}" alt="IMG" /></div>
                                </td>
                                <td class="column-2">{{$item->produk->nama_produk}}</td>
                                <td class="column-3">{{$item->jumlah}}</td>
                                <td class="column-4">{{$item->produk->ukuran}}</td>
                                <td class="column-5">{{$item->produk->deskripsi}}</td>
                                <td class="column-6" id="harga-{{$item->produk->id}}">{{$item->produk->harga}}</td>

                                </div>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="6" class="text-right">Total : </td>
                                <td class="column-6" id="total">0</td>
                            </tr>
                            </table>
                        </div>

                        <a href="#" id="bayar"
                            class="flex-c-m stext-101 cl0 size-105 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                            Bayar
                        </a>
                            {{-- <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">Bayar
                            </div> --}}
                        </div>
                        </div>
                    </div>
{{--
      <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
          <h4 class="mtext-109 cl2 p-b-30">Cart Totals</h4>

          <div class="flex-w flex-t bor12 p-b-13">
            <div class="size-208">
              <span class="stext-110 cl2"> Subtotal: </span>
            </div>

            <div class="size-209">
              <span class="mtext-110 cl2"> Rp210.000 </span>
            </div>
          </div>

          <div class="flex-w flex-t bor12 p-t-15 p-b-30">
            <div class="size-208 w-full-ssm">
              <span class="stext-110 cl2"> Shipping: </span>
            </div>

            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
              <p class="stext-111 cl6 p-t-2">There are no shipping methods available. Please double check your address,
                or contact us if you need any help.</p>

              <div class="p-t-15">
                <span class="stext-112 cl8"> Calculate Shipping </span>

                <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                  <select class="js-select2" name="time">
                    <option>Select a country...</option>
                    <option>USA</option>
                    <option>UK</option>
                  </select>
                  <div class="dropDownSelect2"></div>
                </div>

                <div class="bor8 bg0 m-b-12">
                  <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state"
                    placeholder="State /  country" />
                </div>

                <div class="bor8 bg0 m-b-22">
                  <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode"
                    placeholder="Postcode / Zip" />
                </div>

                <div class="flex-w">
                  <div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">Update Totals
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
{{--
          <div class="flex-w flex-t p-t-27 p-b-33">
            <div class="size-208">
              <span class="mtext-101 cl2"> Total: </span>
            </div>

            <div class="size-209 p-t-1">
              <span class="mtext-110 cl2"> Rp210.000 </span>
            </div>
          </div>

          <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">Proceed to
            Checkout</button> --}}
        </div>
      </div>
    </div>
  </div>
</form>

<script src="{{asset('vendor/jquery/jquery.js')}}"></script>
<script>
    let index = @json($keranjangs);
    let id_keranjang
    $(document).on('change', '.checkbox', function(){
        let total = 0;
        id_keranjang = []
        for (let i = 0; i < index.length; i++) {
            // console.log(index[i].produk_id)
            let id = '#checkbox-'+index[i].produk_id
            if ($(id).is(":checked")) {
                total = total+index[i].produk.harga
                id_keranjang.push(index[i].id)
            }
        }
        $('#total').text(total)
        // console.log(id_keranjang);
    })

    $(document).on('click', '#bayar', function(){

        id_keranjang.forEach(element => {
            index.forEach(item => {
                if (item.id == element) {

                    let produk_id = item.produk_id;

                    console.log(produk_id);

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: '{{url("pesanAll")}}' + '/' + produk_id,
                        type: "post",
                        success: function (response) {
                            alert("Pesanan Berhasil dibuat silakan lakukan pembayaran sesuai pesanan masing masing")
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                        }
                    });
                }
            })
        });
    })

</script>


@endsection
