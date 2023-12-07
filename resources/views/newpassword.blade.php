{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/css/login.css">

    <title>Register</title>
  </head>
  <body> --}}
    @extends('layout/main')
    @section('title', 'Register')
    @section('css')
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    @endsection
      
    
    @section('container')
    <div class="container col-5 " id="test">
        <div class="row card-body" style="box-shadow: 5px 6px 7px 5px #ccc; border-radius:5px;" >
                  <h3 class="d-flex justify-content-center">Change Password</h3>

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if($errors)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                  <br>
                  <form action="{{route('changePasswordPost')}}" method="POST">
                    @csrf
                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-8 control-label">Current Password</label>

                            <div class="col-sm-12">
                                <input id="current-password" type="password" class="form-control" name="current-password" required>

                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new-password" class="col-md-4 control-label">New Password</label>

                            <div class="col-sm-12">
                                <input id="new-\password" type="password" class="form-control" name="new-password" required>

                  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                            <div class="col-sm-12">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary ">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>



                    {{-- <div class="form-group">
                      <label for="password">Current Password</label>
                      <input 
                      type="password"
                      name="password" class="form-control"
                      id="password"
                      required
                      >
    
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
                  <div class="invalid-feedback">
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
                <button type="submit" class="btn btn-primary update">Update</button> --}}

    
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
    </div>       
</div>
<br>
      @endsection 
      @section('js')
      <script src="/js/popper.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <script src="{{asset ('/js/dropify.min.js') }}"></script>
<script src="/js/profile.js"></script>
<script src="/js/alertsession.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      @include('sweetalert::alert')

      {{-- <script src="/js/alertsession.js"></script> --}}
      @endsection
      

      