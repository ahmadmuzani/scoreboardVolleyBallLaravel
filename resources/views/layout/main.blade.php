<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/main.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
  <div>@yield('css')</div>
  <title>@yield('title')</title>
  <script src="/js/jquery.js"></script>
  
</head>

<body>
  
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="border: solid 0px; box-shadow: 5px 6px 7px 5px #ccc;">
    <div class="container">
      <a class="navbar-brand " href="{{ url('/') }}"><b class="text_header">VOLLEYBALL SUKARAJA</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center">
          
        </ul>
        @yield('form_search')
        
        <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Score Result</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/scoreboard') }}">Scoreboard</a>
          </li>
          @endauth
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/about') }}">About</a>
           </li>
          @auth
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/profile') }}"><i class="bi bi-person-circle"></i> Profile</a>
                </li>
            @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/login') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li> 
            @endauth 
        </ul>
        
      </div>
    </div>
  </nav>
{{--   
  <nav class="navbar fixed-top navbar-light bg-light" >
    <div class="container">
        <a class="navbar-brand" href="{{ url('/scoreboard') }}"><h6 class="titleNav"><img class="gambar" src="/assets/img/imgLogo.png" alt="voli">VOLLYBALL SUKARAJA</h6></a>
        <form class="ms-auto p-2 bd-highlight">
          @csrf
          <input class="form-control me-2" name="search" id="search" placeholder="Search Username" style="display: flex"  onfocus="this.value''">  
              <div id="read" style="position: absolute;"></div>
        </form>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
             <a class="nav-link" href="{{ url('/scoreboard') }}">Scoreboard</a>
            </li>
            @auth
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                </li>
            @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li> 
            @endauth            
            <li class="nav-item">
               <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" href="{{ url('/profile') }}">logout</a>
              </li> --}}
        {{-- </ul>
        </div>
    </div>
    </nav> --}}
      {{-- <nav class="fixed-top navbar-light bg-light">  
       <div class="navbar">
        <div class="container nav-container">  
          <input class="checkbox" type="checkbox" name="" id="" />  
          <div class="hamburger-lines">  
           <span class="line line1"></span>  
           <span class="line line2"></span>  
           <span class="line line3"></span>  
          </div>   
         <div class="logo">  
          <h6 class="titleNav"><img class="gambar" src="/assets/img/imgLogo.jpeg" alt="voli">VOLLYBALL SUKARAJA</h6>
         </div>  
         <div class="menu-items">  
              <li> <a href="/">Home</a></li>
              <li> <a href="{{ url('/scoreboard') }}">scoreboard</a></li>
              <li> <a href="{{ url('/profile') }}">profile</a></li>
              <li> <a href="{{ url('/information') }}">information</a></li>
              <li> <a href="{{ url('/about') }}">about</a></li>
              <li> <a href="{{ url('/contact') }}">contact</a></li>
              {{-- <li> 
                  <form action="" class="form-button">
                    <button type="submit" class="dropdown-item" id="button-logout">logout</button>
                  </form>
              </li> --}}
         {{-- </div>  
        </div>  
       </div>  
      </nav>   --}}



  @yield('container')

<div class="d-flex justify-content-center footer text-muted navbar-light bg-light">&copy;{{date('Y')}} Bina Muda Perkasa</div>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @include('sweetalert::alert')
  <!-- Option 2: Separate Popper and Bootstrap JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> --}}

<div>@yield('js')</div>
</body>

</html>