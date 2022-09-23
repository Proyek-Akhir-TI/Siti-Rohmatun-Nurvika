@extends('FE.layout.index')


@section('content')
    <!-- Content page -->
    <section class="p-lr-15 p-tb-100">
            <div class="mb-3">
                <label for="kategori" class="form-pemb">Silahkan Melakukan Pembayaran di Rekening Berikut :</label>
                <img src="https://i.ibb.co/bW8BxfF/norek.png" style="width: 600px; height: 200px">
                {{-- <div class="form-pem">Silahkan Melakukan Pembayaran di Rekening Berikut :
        </div>
        <div class="gambar">
            <img src="{{ asset('FE/images/rek.png')}}">
        </div> --}}
                {{-- <label for="kategori" class="form-pemb"></label>

       style="width: 150px;" height="100px;" /> --}}
                {{-- <img src="public/FE/images/rek.png" alt="rekening" > --}}

            </div>
            <form method="POST" action="{{route('bayar', $pesanan->id)}}" enctype="multipart/form-data">
                @csrf

            <div class="mb-3" style="font-size: 100px">
                {{-- <label for="kategori" class="form-pemb">Input Nominal Pembayaran</label> --}}
                <h3 class="stext-200 cl3 p-t-23">{{$total_bayar}}</h3>
                {{-- <input type="text" name="inputan" class="form-custom" style="width: 240px" id="name"
                    placeholder="masukkan nominal yang dibayar"> --}}
            </div>

            <div class="mb-3 p-t-10">
                <label for="bukti_tf" class="form-pemb">Upload Bukti Pembayaran</label>
                <input class="p-tb-5 p-t-5" name="bukti_tf" type="file"
                    accept="image/png, image/jpeg" />
                <p>File berupa jpg dan png</p>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>



    </section>
@endsection
