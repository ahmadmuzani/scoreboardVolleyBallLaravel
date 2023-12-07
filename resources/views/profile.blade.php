@extends('layout/main')
@section('title', 'profile')

@section('css')
<meta name="csrf_token" content="{{csrf_token()}}">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
<link rel="stylesheet" type="text/css" href="/css/profile.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
@endsection

@section('container')

<div class="container" id="container-profile" >
   
    <div class="main-body" >
        {{-- <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb --> --}}
          

          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card" style="box-shadow: 5px 6px 7px 5px #ccc">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <div id="notif" style="display: none; background:green; font-weight:450; width:350px position:fixed;">
                    </div>
                    @if(Auth::user()->image)
                    <div class="wrapper" id="wrapper" style="
                    background: url({{asset('photosprofile/'. Auth::user()->image) }}); 
                    height: 200px;
                    width: 200px;
                    position: relative;
                    border-radius: 50%;
                    background-size: 100% 100%;
                    overflow: hidden;">
                    @else
                    <div class="wrapper" id="wrapper" style="
                    background: url('{{asset('assets/img/FOTODEFAULT.png')}}'); 
                    height: 200px;
                    width: 200px;
                    position: relative;
                    border-radius: 50%;
                    background-size: 100% 100%;
                    overflow: hidden;">
                    {{-- <div class="wrapper" id="wrapper" style="
                    background: url('https://bootdey.com/img/Content/avatar/avatar7.png'); 
                    height: 200px;
                    width: 200px;
                    position: relative;
                    border-radius: 50%;
                    background-size: 100% 100%;
                    overflow: hidden;"> --}}

                    
                    @endif
                      <input type="file" class="profile_pict" id="profile_pict" name="file_img">
                    </div>
                    <button class="coba" id="mgs_ta" style="display: none"></button>
                    {{-- <span id="mgs_ta">
                        
                    </span> --}}
                    {{-- <label for=""><i class="bi bi-camera"> change photos</i></label> --}}
                    {{-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150"> --}}
                    <div class="mt-3">
                      <h4>{{ auth()->user()->username }} </h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3" style="box-shadow: 5px 6px 7px 5px #ccc">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a href="#result" class="btn btn-outline-secondary"><i class="bi bi-clock-history"></i> History</a>
                      {{-- <span class="btn btn-outline-secondary"><i class="bi bi-clock-history"></i> History</span> --}}
                  </li>
                  {{-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <button type="button" class="btn btn-outline-secondary"><i class="bi bi-pencil-square"></i> Edit</button>
                  </li> --}}
                  @auth
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <form method="post" action="/logout">
                      @csrf
                    <button type="submit" class="btn btn-outline-secondary"><i class="bi bi-box-arrow-left"></i> Logout</button>
                    </form>
                  </li>
                  @endauth
                  {{-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li> --}}
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3" style="box-shadow: 5px 6px 7px 5px #ccc">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                      {{ auth()->user()->name}}
                      {{-- @else
                      {{$user->name}} --}}

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                      {{ auth()->user()->username}}
                      {{-- @else
                      {{$user->username}} --}}

                    </div>
                  </div>
                  <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                      {{ auth()->user()->email}}
                      {{-- @else
                      {{$user->email}} --}}

                    </div>
                  </div>
                  <hr>
                  {{-- <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Bay Area, San Francisco, CA
                    </div>
                  </div>
                  <hr> --}}
                  @auth
                  <div class="row">
                    <div class="col-sm-12">
                      {{-- <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a> --}}
                                              <!-- Button trigger modal -->
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Edit
                        </button> --}}
                        <a href="/edit" type="button" class="btn btn-primary">Edit Profile</a>

                    </div>
                  </div>
                  @endauth



                  
                </div>
              </div>
              <form action="/profile" method="GET" class="ms-auto p-2 bd-highlight" id="result">
                @csrf
                <div class="row" >
                  <div class="col">
                    <h2><b style="text-decoration: underline">History</b></h2>
                  </div>
                  <div class="col">
                    <input class="form-control me-2 cari_hasil" id="cari_hasil" placeholder="Cari Pertandingan" onfocus="this.value">  
                  </div>
                </div>
              </form>
              
              <div id="result_game">
              <div>

               


              @foreach ($scoreboards as $scoreboard)
              @if ($scoreboard->user->id == Auth::user()->id)
              <div class="mb-4" style="border: solid 0px; box-shadow: 5px 6px 7px 5px #ccc; border-radius:10px;">
                <div class="card text-center">
                  <div class="card-header">
                      <div class="row">
                        {{-- @php  $enc= Crypt::encrypt($scoreboard->id); @endphp --}}
                          <div class="col" style="text-decoration: none; text-align:left"><a href="/detail/{{$scoreboard->id}}" class="badge badge-info" style="color: rgb(255, 255, 255; text-decoration: none;">Lihat statistik</a></div>
                          <div class="col" style="text-align: center">
                            <b>FULL TIME SET {{ $scoreboard->set }}</b> 
                          </div>
                          <div class="col" style="text-align: right"><a href="/delete/{{$scoreboard->id}}" class="badge badge-danger result" id="result" style="text-decoration: none;">delete</a></div>
                        </div>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-3 d-flex justify-content-start" style="text-align: center;">
                            <h4><b>{{ $scoreboard->team1 }}</b></h4>
                          </div>
                          <div class="col-2" style="text-align: center;">
                            <h4><b>{{ $scoreboard->score1 }}</b></h4>
                          </div>
                          <div class="col" style="text-align: center">
                            <h2><b>VS</b></h2>
                          </div>
                          <div class="col-2" style="text-align: center">
                            <h4><b>{{ $scoreboard->score2 }}</b></h4>
                          </div>
                          <div class="col-3 d-flex justify-content-end" style="text-align: center">
                            <h4><b>{{ $scoreboard->team2 }}</b></h4> 
                          </div>
                        </div>   
                  </div>
                  <div class="card-footer text-muted">
                    <div class="row">
                      <div class="col d-flex justify-content-center">
                        @if($scoreboard->score1 > $scoreboard->score2)
                        <h4 class="animate__animated animate__flash animate__infinite"><b>WIN</b></h4>
                        @endif
                      </div>
                      <div class="col-5">
                          <p>DATE {{ $scoreboard->created_at }}</p> 
                      </div>
                      <div class="col">
                        @if($scoreboard->score2 > $scoreboard->score1)
                        <h4 class="animate__animated animate__flash animate__infinite"><b>WIN</b></h4>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endif
              @endforeach
              {{-- {{$scoreboards->links()}} --}}
            </div>
          </div>
              <div id="read_data"> </div>

                
              </div>



            </div>
          </div>

        </div>
    </div>
    
@endsection
@section('js')
<script src="{{asset ('/js/dropify.min.js') }}"></script>
<script src="{{ URL::asset('/js/profile.js') }}"></script>
<script src="/js/alertsession.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
 
</script>
@endsection