<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="{{ asset('FE/images/icons/favicon.png') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/bootstrap/css/bootstrap.min.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset( 'FE/fonts/iconic/css/material-design-iconic-font.min.css')
    }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/fonts/linearicons-v1.0.0/icon-font.min.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/animate/animate.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/css-hamburgers/hamburgers.min.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/animsition/css/animsition.min.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/select2/select2.min.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/daterangepicker/daterangepicker.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/slick/slick.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/MagnificPopup/magnific-popup.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/css/util.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/css/main.css') }}" />
  <!--===============================================================================================-->
</head>
 <!-- Slider -->
 <section class="section-slide">
    <div class="wrap-slick1">
      <div class="slick1">
        <div class="item-slick1" style="background-image: url(https://i.ibb.co/hD2CtvP/slider1.png)">
          {{-- <img src="{{ asset('') }}" alt=""> --}}
          <div class="container h-full">
            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
              <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                <span class="ltext-101 cl2 respon2"> Welcome </span>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">UNIQME STORE</h2>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                <a href="{{ route('produk') }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"> Shop
                  Now </a>
              </div>
            </div>
          </div>
        </div>

        <div class="item-slick1" style="background-image: url(https://i.ibb.co/x3nGXmp/slider2.png)">
          <div class="container h-full">
            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
              <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                <span class="ltext-101 cl2 respon2"> Buy Your</span>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">Style and Fashion</h2>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                <a href="{{ route('produk') }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"> Shop
                  Now </a>
              </div>
            </div>
          </div>
        </div>

        <div class="item-slick1" style="background-image: url(https://i.ibb.co/PxVjd7Z/slide3.png)">
          <div class="container h-full">
            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
              <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                <span class="ltext-101 cl2 respon2"> Trend Style </span>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">New arrivals</h2>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                <a href="{{ route('produk') }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"> Shop
                  Now </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
