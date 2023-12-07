@extends('layout/main')
@section('title', 'Vollyball Sukaraja')
@section('css')
<meta name="csrf_token" content="{{csrf_token()}}">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/scoreboard.css">
<link rel="stylesheet" type="text/css" href="/css/index.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


@endsection
@section('form_search')
{{-- @auth --}}
@auth
<form class="">
  <input class="form-control me-2" name="search" id="search" placeholder="Search Username" style="display: flex"  onfocus="this.value">  
  <div id="read" style="position: absolute;"></div>
</form>
@endauth
{{-- @endauth --}}
@endsection
@section('container')
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide mb-2" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/assets/img/egor.jpg" class="d-block w-100" alt="..." id="carousel">
                <div class="carousel-caption d-md-block caption">
                    <img src="/assets/img/caper2-min.png" class="imgheading" alt="">
                  {{-- <h1 class="heading">Cari Pertandingan</h1> --}}
                  <form action="/" method="GET" class="ms-auto p-2 bd-highlight">
                    @csrf
                  <div class="input-group mb-3">
                    <input type="date" name="tanggal" class="d-none d-lg-block d-print-block tanggal" id="tanggal" onClick="klik()" onfocus="this.value">
                    <input class="form-control me-2 cari_hasil" id="hasil" placeholder="Cari pertandingan" onfocus="this.value">
                  </div> 
                  </form>
                </div>
              </div>
              {{-- <div class="carousel-item">
                <img src="/assets/img/andre.jpg" class="d-block w-100" alt="..." id="carousel">
                <div class="carousel-caption d-none d-md-block caption">
                    <img src="/assets/img/caper2-min.png" class="imgheading" alt="">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                      <input class="form-control me-2 cari_hasil" id="cari_hasil" placeholder="Cari Pertandingan" onfocus="this.value">
                    </div>  
                </div>
              </div> --}}
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
        <h2 class="d-flex justify-content-center header_result"><b>Hasil Pertandingan</b></h2><hr>
          <div id="resultt">
          @foreach ($scoreboards as $scoreboard)
          <div class="mb-4" style="border: solid 0px; box-shadow: 5px 6px 7px 5px #ccc; border-radius:10px;">
            <div class="card text-center">
              <div class="card-header">
                  <div class="row">
                    {{-- @php  $enc= Crypt::encrypt($scoreboard->id); @endphp --}}
                      <div class="col" style="text-decoration: none; text-align:left"><a href="/detail/{{$scoreboard->id}}" class="badge badge-info" style="color: rgb(255, 255, 255); text-decoration: none;">Lihat statistik</a></div>
                      <div class="col" style="text-align: center">
                        <b>FULL TIME SET {{ $scoreboard->set }}</b> 
                      </div>
                      <div class="col" style="text-align: right"></div>
                    </div>
              </div>
              <div class="card-body">
                <div class="container text-center">
                  <div class="row">
                    <div class="col-3">{{ $scoreboard->team1 }}</div>
                    <div class="col-2">{{ $scoreboard->score1 }}</div>
                    <div class="col-2">VS</div>
                    <div class="col-2">{{ $scoreboard->score2 }}</div>
                    <div class="col-3">{{ $scoreboard->team2 }}</div>
                  </div>
                  {{-- <div class="row">
                      <div class="col">
                        <h4 style="font-size: 1.3rem"><b>{{ $scoreboard->team1 }}</b></h4>
                      </div>
                      <div class="col">
                        <h4 style="font-size: 1.3rem"><b>{{ $scoreboard->score1 }}</b></h4>
                      </div>
                      <div class="col">
                        <h2 style="font-size: 1.3rem"><b>VS</b></h2>
                      </div>
                      <div class="col">
                        <h4 style="font-size: 1.3rem"><b>{{ $scoreboard->score2 }}</b></h4>
                      </div>
                      <div class="col-3">
                        <h4 style="font-size: 1.3rem"><b>{{ $scoreboard->team2 }}</b></h4> 
                      </div>
                    </div>    --}}
                  </div>
              </div>
              <div class="card-footer text-muted">
                <div class="row">
                  <div class="col d-flex justify-content-center">
                    @if($scoreboard->score1 > $scoreboard->score2)
                    <h4 class="animate__animated animate__flash animate__infinite"><b>WIN</b></h4>

                      {{-- <h5><i class="bi bi-trophy animate__animated animate__flash animate__infinite"></i></h5> --}}
                    @endif
                  </div>
                  <div class="col-5">
                      <p>Date {{ $scoreboard->created_at }}</p> 
                  </div>
                  <div class="col">
                    @if($scoreboard->score2 > $scoreboard->score1)
                    <h4 class="animate__animated animate__flash animate__infinite"><b>WIN</b></h4>

                      {{-- <h6><i class="bi bi-trophy animate__animated animate__flash animate__infinite"></i></h6> --}}
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          @endforeach
          {{$scoreboards->links()}}
        </div>
        <div id="read_data"> </div>
        <br>
        <br>

          
        {{-- <img src="/assets/img/egor.jpg" alt="..." style="height: 600px; width: 100%; border-radius: 20px 20px 20px 20px"> --}}
    </div>

            {{-- <img src="/assets/img/depan.jpg" alt="voli" class="d-block w-100" alt="..."> --}}
 
@endsection
@section('js')
<script src="{{asset ('/js/dropify.min.js') }}"></script>
<script src="/js/index.js"></script>
<script src="/js/alertsession.js"></script>
<script src="/js/detectmobilebrowser.js"></script>
<script src="/js/search.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
 
</script>
@endsection