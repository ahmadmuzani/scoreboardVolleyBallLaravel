    @extends('layout/main')
    @section('title', 'forgot password')
    @section('css')
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    @endsection
      
    
  @section('container') 
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="/assets/img/card.png" alt="Image" id="img-login" class="img-fluid">
        </div>
        
      {{-- <div class="allert-failed">
        @if(session()->has('loginFailed'))
          <div class="alert alert-danger alert-dismissible fade show" id="danger-alert" role="alert">
            {{session('loginFailed')}}
          </div>
          @endif
      </div>   --}}
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                {{-- <div class="allert-success">
                  @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
                      {{session('success')}} --}}
                      {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                    {{-- </div>
                    @endif
                  </div>
                <div class="allert-failed">
                  @if(session()->has('loginFailed'))
                    <div class="alert alert-danger alert-dismissible fade show" id="danger-alert" role="alert">
                      {{session('loginFailed')}}
                    </div>
                    @endif
                </div> --}}
              <h3>Forgot Password</h3>
              <br>
              <p class="mb-3">Enter your email address and we will send you a link to reset your password.</p>
            </div>
            <form action="" method="POST">
              @csrf
              {{-- <div class="form-group first mb-2">
                <label for="email">Enter email address</label>
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror"  id="username" required  >
                @error('username')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror 
              </div> --}}
              <div class="form-group mb-2" style="border-radius: 5px 5px 5px 5px">
                <input placeholder="enter email address"
                type="email"
                name="email" class=" form-control @error('email') is-invalid @enderror"
                id="email"
                required
                value="{{old('email')}}"
                >
              @error('email')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
              @enderror             
            </div>
                <button class="btn btn-block btn-primary">Sensword Link</button>
<!--               <input type="submit" value="Login" class="btn btn-block btn-primary">
 -->            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  @endsection 
  @section('js')
  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/alertsession.js"></script>
  @endsection