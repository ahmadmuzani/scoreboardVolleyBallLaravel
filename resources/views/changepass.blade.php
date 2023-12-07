@extends('layout/main')
@section('title', 'Change Password')

@section('css')
{{-- <link rel="stylesheet" type="text/css" href="/css/profile.css"> --}}
@endsection

@section('container')<div class="p2">
    <div class="container col-5 " id="test">
    <div class="row card-body" style="box-shadow: 5px 6px 7px 5px #ccc; border-radius:5px;" >
        <div class="d-flex justify-content-center header"><h2>Change Password</h2></div>
        <div class="col">
            <div class="form-floating">
                <form action="{{url('update/'.Auth::user()->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                  
                    <div class="form-group">
                        <label for="password">Password</label>
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
                    <label for="password">Confirm Password</label>
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
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary update">Update</button>
                    </div>
                </form>
      
                      {{-- <button class="btn btn-block btn-primary">Register</button> --}}
      <!--               <input type="submit" value="Login" class="btn btn-block btn-primary">
       -->
                      <p>Have an account?<a href="{{url('/login')}}">Login!</a></p>
                  </form>
                {{-- <form action="{{url('updatePassword/'.Auth::user()->id)}}" method="POST">
                    @csrf
                    <div class="form-group first">
                    <div class="form-group">
                      <label for="password">Current Password</label>
                      <input 
                      type="password"
                      name="current-password" class="form-control @error('password') is-invalid @enderror"
                      id="current-password"
                      required
                      >
                  @error('password')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror      
                </div>
                    <div class="form-group">
                      <label for="password">New Password</label>
                      <input 
                      type="password"
                      name="password" class="form-control @error('current-password') is-invalid @enderror"
                      id="password"
                      required
                      >
                  @error('current-password')
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
                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary update">Change Password</button>
                </div>       --}}


                {{-- -------- --}}
                      {{-- <button class="btn btn-block btn-primary">Register</button> --}}
      <!--               <input type="submit" value="Login" class="btn btn-block btn-primary">
       -->
                      {{-- <p>Have an account?<a href="{{url('/login')}}">Login!</a></p>
                  </form> --}}
                {{-- <form action="{{url('update/'.Auth::user()->id)}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">new password</label>
                        <div class="col-sm-10">
                        <input type="password"
                        name="password" class="form-control @error('password') is-invalid @enderror"
                        id="password"
                        required>
                        @error('password')
                        <div class="invalid-feedback" id="passwordnotmatch">
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">confirm password</label>
                        <div class="col-sm-10">
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
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary update">Change Password</button>
                    </div>
                </form> --}}
              </div>       
             </div>        
    </div>
    </div>
@endsection
@section('js')
<script src="/js/edit.js"></script>

@endsection