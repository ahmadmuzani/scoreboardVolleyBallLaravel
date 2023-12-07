@extends('layout/main')
@section('title', 'Reset Password')
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
          <img src="/assets/img/card.png" alt="Image" class="img-fluid">
        </div>
        {{-- <div class="allert-success">
        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
        </div>
      <div class="allert-failed">
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
                {{-- <div class="allert-failed">
                  @if(session()->has('loginFailed'))
                    <div class="alert alert-danger alert-dismissible fade show" id="danger-alert" role="alert">
                      {{session('loginFailed')}}
                    </div>
                    @endif
                </div> --}}
              <h3>RESET YOUR PASSWORD</h3>
            </div>
            <form action="{{route('reset.password')}}" method="POST">
              @csrf
              <input type="hidden" name="token" value="{{ $token }}" id="">
              <div class="form-group">
                {{-- <label for="email">Email</label> --}}
                <input 
                type="email"
                name="email" class=" form-control @error('email') is-invalid @enderror"
                id="email"
                required
                value="{{ $email ?? old('email')}}"
                >
              @error('email')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
              @enderror             
            </div>
              <div class="form-group">
                <label for="password">New Password</label>
                <input 
                type="password"
                name="password" class=" form-control @error('password') is-invalid @enderror"
                id="password"
                required
                >
            @error('password')
              <div class="invalid-feedback" id="passwordnotmatch">
                {{$message}}
              </div>
            @enderror      
          </div>
          <div class="form-group last mb-2">
            <label for="password">Confirm New Password</label>
            <input 
                type="password"
                name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                id="password"
                required autocomplete="current-password"
                >
                @error('password_confirmation')
                <div class="invalid-feedback" id="passwordnotmatch">
                {{$message}}
                </div>
                 @enderror    
            </div>
            <button class="btn btn-block btn-primary">RESET PASSWORD</button>

                {{-- <button class="btn btn-block btn-primary">Register</button> --}}
<!--               <input type="submit" value="Login" class="btn btn-block btn-primary">
 -->
            </form>
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
  {{-- <script src="/js/alertsession.js"></script> --}}
  @endsection