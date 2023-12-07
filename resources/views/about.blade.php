@extends('layout/main')
@section('title', 'About')
@section('css')
<meta name="csrf_token" content="{{csrf_token()}}">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/about.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

@endsection

@section('container')
<div class="container">
<div id="carouselExampleSlidesOnly" class="carousel mb-1" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/assets/img/andre.jpg" class="d-block w-100" id="carousel" alt="...">
        <div class="carousel-caption d-md-block caption">
            <div><img src="/assets/img/volibalsukaraja.png" class="img-text img-fluid" alt=""></div>
            <div class="txt">
            <b>
            <p class="text1">menghitung skor dan statistik bro pertandingan bola voli secara digital</p>
            <p class="text2">kemudian menyimpan hasilnya dengan mudah</p>
            <a href="/scoreboard" class="btn btn-primary">MULAI</a>
            </b>
            </div>
            {{-- <h1 id="text-header" >VOLLEYBALL SUKARAJA</h1>
            <h2 id="text-header-2">BINA MUDA PERKASA</h2> --}}
          </div>
      </div>
    </div>
  </div>
  {{-- <div class="d-flex justify-content-center">
    <img src="/assets/img/logobmp.jpeg" class="logobmp" alt="">
</div>
<div class="d-flex justify-content-center">
    <img src="/assets/img/bmp.png" class="bmp" alt="">
</div> --}}
</div>

@endsection
