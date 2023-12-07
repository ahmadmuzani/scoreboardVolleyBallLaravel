@extends('layout/main')
@section('title', 'Detail')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/detail.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/scoreboard.css">
<link rel="stylesheet" type="text/css" href="/css/index.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

@endsection


@section('container')
<div class="container text-center" id="test">
  <div>
    <h1 style="text-align: center" class="header"><b>GAME STATISTIC</b></h1>
    <h6 style="text-align: center">SET <b>{{$scoreboard->set}}</b></h6>
  </div>
  <div class="row">
    <div class="col-4" style="text-overflow:ellipsis; border: solid; border-right:none; text-align:center; height:70px; margin-top:6px;">
      <h5 style="text-overflow:ellipsis;" ><b>{{$scoreboard->team1}}</b></h5>
    </div>
    <div class="col-4" style="border: solid; border-radius:5px; text-align:center; height:80px;">
      <h3><b>{{$scoreboard->score1}} : {{$scoreboard->score2}}</b></h3>
    </div>
    <div class="col-4" style="border: solid; border-left:none; text-align:center; height:70px; margin-top:6px;">
      <h5 ><b>{{$scoreboard->team2}}</b></h5>
    </div>
  </div>
  <div><h6 style="text-align: center">DATE {{$scoreboard->created_at}}</h6></div>
  <hr>
  <div class="row" style="margin-bottom: 5px">
    <div class="col animate__animated animate__zoomInDown animate__delay-1s" style="border: solid; border-radius:10px;  text-align:center;  background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
      <h2 style="margin-top: 2px;">{{$scoreboard->spike1}}</h2>
    </div>
    <div class="col-7 animate__animated animate__zoomInDown" style="border: solid; border-radius: 10px; text-align:center; margin-left:1px; margin-right:1px; height:60px; background: linear-gradient(rgb(62, 62, 214),rgb(97, 208, 228))">
      <h3 style="margin-top: 10px; color:white;"><b>SPIKE</b></h3>
    </div>
    <div class="col animate__animated animate__zoomInDown animate__delay-1s" style="border: solid; border-radius: 10px;  text-align:center;  background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
      <h2 style="margin-top: 2px;">{{$scoreboard->spike2}}</h2>
    </div>
  </div>
  <div class="row" style="margin-bottom: 5px">
    <div class="col animate__animated animate__zoomInDown animate__delay-1s" style="border: solid; border-radius:10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
      <h2 style="margin-top: 2px;">{{$scoreboard->block1}}</h2>
    </div>
    <div class="col-7 animate__animated animate__zoomInDown" style="border: solid; border-radius: 10px; margin-left:1px; margin-right:1px; text-align:center; height:60px; background: linear-gradient(rgb(62, 62, 214),rgb(97, 208, 228))">
      <h3 style="margin-top: 10px; color:white;"><b>BLOCK</b></h3>
    </div>
    <div class="col animate__animated animate__zoomInDown animate__delay-1s" style="border: solid; border-radius: 10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
      <h2 style="margin-top: 2px;">{{$scoreboard->block2}}</h2>
    </div>
  </div>
  <div class="row" style="margin-bottom: 5px">
    <div class="col animate__animated animate__zoomInDown animate__delay-1s" style="border: solid; border-radius:10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
      <h2 style="margin-top: 2px">{{$scoreboard->serve1}}</h2>
    </div>
    <div class="col-7 animate__animated animate__zoomInDown" style="border: solid; border-radius: 10px; text-align:center; margin-left:1px; margin-right:1px; height:60px; background: linear-gradient(rgb(62, 62, 214),rgb(97, 208, 228))">
      <h3 style="margin-top: 10px; color:white;"><b>SERVE</b></h3>
    </div>
    <div class="col animate__animated animate__zoomInDown animate__delay-1s" style="border: solid; border-radius: 10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
      <h2 style="margin-top: 2px">{{$scoreboard->serve2}}</h2>
    </div>
  </div>
  <div class="row" style="margin-bottom: 5px">
    <div class="col animate__animated animate__zoomInDown animate__delay-1s" style="border: solid; border-radius:10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
      <h2 style="margin-top: 2px">{{$scoreboard->opponent1}}</h2>
    </div>
    <div class="col-7 animate__animated animate__zoomInDown" style="border: solid; border-radius: 10px; text-align:center; margin-left:1px; margin-right:1px; height:60px; background: linear-gradient(rgb(62, 62, 214),rgb(97, 208, 228))">
      <h3 style="margin-top: 10px; color:white;"><b>OPP. ERROR</b></h3>
    </div>
    <div class="col animate__animated animate__zoomInDown animate__delay-1s" style="border: solid; border-radius: 10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
      <h2 style="margin-top: 2px">{{$scoreboard->opponent2}}</h2>
    </div>
  </div>
  <div class="row">
    <div class="col animate__animated animate__zoomInDown animate__delay-1s" style="border: solid; border-radius:10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
      <h2 style="margin-top: 2px">{{$scoreboard->spike1 + $scoreboard->block1 + $scoreboard->serve1 + $scoreboard->opponent1}}</h2>
    </div>
    <div class="col-7 animate__animated animate__zoomInDown" style="border: solid; border-radius: 10px; margin-left:1px; margin-right:1px; text-align:center; height:60px; background: linear-gradient(rgb(62, 62, 214),rgb(97, 208, 228))">
      <h3 style="margin-top: 10px; color:white;"><b>TOTAL</b></h3>
    </div>
    <div class="col animate__animated animate__zoomInDown animate__delay-1s" style="border: solid; border-radius: 10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
      <h2 style="margin-top: 2px">{{$scoreboard->spike2 + $scoreboard->block2 + $scoreboard->serve2 + $scoreboard->opponent2}}</h2>
    </div>
  </div>
</div>
            
 

{{-- <div class="container" id="test">
    <div class="row">
    <div class="col">
        <div class="form-floating">
        <div>
            <h1 style="text-align: center" class="header"><b>GAME STATISTIC</b></h1>
        </div>
        <div class="container" >
            <div class="row">
            <div>
              <h6 style="text-align: center">SET <b>{{$scoreboard->set}}</b></h6>
            </div>
              <div class="col animate__animated animate__bounceInLeft" style="border: solid; border-right:none; text-align:center; height:70px; margin-top:6px;">
                <h5 style="margin-top: 10px"><b>{{$scoreboard->team1}}</b></h5>
              </div>
              <div class="col-4 animate__animated animate__bounceInDown" style="border: solid; border-radius:5px; text-align:center; height:80px;">
                <h1 style="margin-top: 15px"><b>{{$scoreboard->score1}} : {{$scoreboard->score2}}</b></h1>
              </div>
              <div class="col animate__animated animate__bounceInRight" style="border: solid; border-left:none; text-align:center; height:70px; margin-top:6px;">
                <h5 style="margin-top: 10px"><b>{{$scoreboard->team2}}</b></h5>
              </div>
              <div><h6 style="text-align: center">DATE {{$scoreboard->created_at}}</h6></div>
            </div>
          </div>
          <hr>
          <div class="container" >
            <div class="row" style="margin-bottom: 5px">
              <div class="col animate__animated animate__bounceInLeft animate__delay-1s" style="border: solid; border-radius:10px;  text-align:center;  background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
                <h2 style="margin-top: 2px;">{{$scoreboard->spike1}}</h2>
              </div>
              <div class="col-7 animate__animated animate__zoomInDown" style="border: solid; border-radius: 10px; text-align:center; margin-left:1px; margin-right:1px; height:60px; background: linear-gradient(rgb(62, 62, 214),rgb(97, 208, 228))">
                <h3 style="margin-top: 10px; color:white;"><b>SPIKE</b></h3>
              </div>
              <div class="col animate__animated animate__bounceInRight animate__delay-1s" style="border: solid; border-radius: 10px;  text-align:center;  background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
                <h2 style="margin-top: 2px;">{{$scoreboard->spike2}}</h2>
              </div>
            </div>
            <div class="row" style="margin-bottom: 5px">
              <div class="col animate__animated animate__bounceInLeft animate__delay-1s" style="border: solid; border-radius:10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
                <h2 style="margin-top: 2px;">{{$scoreboard->block1}}</h2>
              </div>
              <div class="col-7 animate__animated animate__zoomInDown" style="border: solid; border-radius: 10px; margin-left:1px; margin-right:1px; text-align:center; height:60px; background: linear-gradient(rgb(62, 62, 214),rgb(97, 208, 228))">
                <h3 style="margin-top: 10px; color:white;"><b>BLOCK</b></h3>
              </div>
              <div class="col animate__animated animate__bounceInRight animate__delay-1s" style="border: solid; border-radius: 10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
                <h2 style="margin-top: 2px;">{{$scoreboard->block2}}</h2>
              </div>
            </div>
            <div class="row" style="margin-bottom: 5px">
              <div class="col animate__animated animate__bounceInLeft animate__delay-1s" style="border: solid; border-radius:10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
                <h2 style="margin-top: 2px">{{$scoreboard->serve1}}</h2>
              </div>
              <div class="col-7 animate__animated animate__zoomInDown" style="border: solid; border-radius: 10px; text-align:center; margin-left:1px; margin-right:1px; height:60px; background: linear-gradient(rgb(62, 62, 214),rgb(97, 208, 228))">
                <h3 style="margin-top: 10px; color:white;"><b>SERVE</b></h3>
              </div>
              <div class="col animate__animated animate__bounceInRight animate__delay-1s" style="border: solid; border-radius: 10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
                <h2 style="margin-top: 2px">{{$scoreboard->serve2}}</h2>
              </div>
            </div>
            <div class="row" style="margin-bottom: 5px">
              <div class="col animate__animated animate__bounceInLeft animate__delay-1s" style="border: solid; border-radius:10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
                <h2 style="margin-top: 2px">{{$scoreboard->opponent1}}</h2>
              </div>
              <div class="col-7 animate__animated animate__zoomInDown" style="border: solid; border-radius: 10px; text-align:center; margin-left:1px; margin-right:1px; height:60px; background: linear-gradient(rgb(62, 62, 214),rgb(97, 208, 228))">
                <h3 style="margin-top: 10px; color:white;"><b>OPP. ERROR</b></h3>
              </div>
              <div class="col animate__animated animate__bounceInRight animate__delay-1s" style="border: solid; border-radius: 10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
                <h2 style="margin-top: 2px">{{$scoreboard->opponent2}}</h2>
              </div>
            </div>
            <div class="row">
              <div class="col animate__animated animate__bounceInLeft animate__delay-1s" style="border: solid; border-radius:10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
                <h2 style="margin-top: 2px">{{$scoreboard->spike1 + $scoreboard->block1 + $scoreboard->serve1 + $scoreboard->opponent1}}</h2>
              </div>
              <div class="col-7 animate__animated animate__zoomInDown" style="border: solid; border-radius: 10px; margin-left:1px; margin-right:1px; text-align:center; height:60px; background: linear-gradient(rgb(62, 62, 214),rgb(97, 208, 228))">
                <h3 style="margin-top: 10px; color:white;"><b>TOTAL</b></h3>
              </div>
              <div class="col animate__animated animate__bounceInRight animate__delay-1s" style="border: solid; border-radius: 10px;  text-align:center; background:linear-gradient(rgb(233, 3, 3),rgb(218, 218, 219)); height:50px; margin-top:6px;">
                <h2 style="margin-top: 2px">{{$scoreboard->spike2 + $scoreboard->block2 + $scoreboard->serve2 + $scoreboard->opponent2}}</h2>
              </div>
            </div>
            

          </div> 
          </div>       
         </div>
</div>
</div> --}}
@endsection 
@section('js')
<script src=""></script>
@endsection