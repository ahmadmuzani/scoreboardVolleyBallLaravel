@extends('layout/main')
@section('title', 'edit')

@section('css')
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
{{-- <link rel="stylesheet" type="text/css" href="/css/profile.css"> --}}
@endsection

@section('container')

    <div class="container col-5 " id="test">
        <div class="row card" style="box-shadow: 5px 6px 7px 5px #ccc; border-radius:5px;" >
            <div class="d-flex flex-column align-items-center text-center">
                @if(Auth::user()->image == null )
                <img src="{{asset('assets/img/FOTODEFAULT.png')}}" alt="Admin" class="rounded-circle mb-2" width="150">
                @else
                <img src="{{asset('photosprofile/'. Auth::user()->image) }}" alt="Admin" class="rounded-circle" style="height: 150px;
                width: 150px;">
                <div class="d-flex">
                <div class="col d-flex justify-content-center mb-2 mt-2" style="text-align: right">
                    <a href="#" data-image="{{Auth::user()->image}}" class="badge badge-danger hapusphotos" id="hapusphotos" style="text-decoration: none;">delete photos</a>
                </div>
            </div>
                @endif
            </div>
            <br>
            {{-- <div class="label d-flex justify-content-center"><a href="">delete</a></div> --}}
        <div class="col">
            <div class="form-floating">
                <form action="{{url('update/'.Auth::user()->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                        <input type="username" name="name" value="{{auth()->user()->name}}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <div class="invalid-feedback" id="pesan-error">
                            {{$message}}
                        </div>
                        @enderror  
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                        <input type="username" name="username" value="{{auth()->user()->username}}" class="form-control @error('username') is-invalid @enderror">
                        @error('username')
                  <div class="invalid-feedback" id="pesan-error">
                    {{$message}}
                  </div>
                @enderror   
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" value="{{auth()->user()->email}}" name="email" class="form-control" @error('email') is-invalid @enderror>
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror   
                        </div>
                    </div>
                    <div class="row mb-3">
                        <a href="{{url('/newpassword')}}" style="text-align: center">Change Password?</a>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary update">Update</button>
                    </div>
                    <br><br>
                </form>
              </div>       
             </div>
    </div>
    </div>
    <br>
@endsection
@section('js')
<script src="/js/edit.js"></script>
<script src="/js/main.js"></script>
@endsection