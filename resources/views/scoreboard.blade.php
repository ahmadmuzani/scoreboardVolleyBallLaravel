@extends('layout/main')
@section('title', 'scoreboard')
@section('css')
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/scoreboard.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
@endsection
@section('form_search')
{{-- @auth --}}
<form class="">
  @csrf
  <input class="form-control me-2" name="search" id="search" placeholder="Search Username" style="display: flex"  onfocus="this.value">  
  <div id="read" style="position: absolute;"></div>
</form>
{{-- @endauth --}}
@endsection
@section('container')
<form action="{{url('scoreboard')}}" id="form" method="POST">
    @csrf
    <div class="container" id="test"> 
        <div class="row gx-6">
          <div class="d-flex justify-content-center"><h2 class="animate__animated animate__zoomIn">SCOREBOARD</h2></div>
        <div class="col">  
            <div class="form-floating">
              <div style="text-align: center; ">
                <div class="wrapper" id="wrapper" style="
                    background: url('{{asset('assets/img/FOTODEFAULT.png')}}'); 
                    height: 150px;
                    width: 150px;
                    position: relative;
                    border-radius: 50%;
                    background-size: 100% 100%;
                    overflow: hidden;
                    margin-top:-50px;"><input type="file" class="profile_pict" id="profile_pict" name="logo1">
                    <button class="coba" id="mgs_ta" style="display: none"></button></div>
              </div>
                <input type="username" id="left" value="" style="font-size: 30px; text-align:center;"  name="team1" class="form-control left  @error('namateam') is-invalid @enderror"  required  >
                @error('namateam')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror   
                    
              </div>       
             </div>
            
        <div class="col">
            <div class="form-floating">
              <div class="d-flex justify-content-end">
                <div class="wrapper2" id="wrapper2" style="
                    background: url('{{asset('assets/img/FOTODEFAULT.png')}}'); 
                    height: 150px;
                    width: 150px;
                    position: relative;
                    border-radius: 50%;
                    background-size: 100% 100%;
                    overflow: hidden;
                    margin-top:-50px;"><input type="file" class="profile_pict2" id="profile_pict2" name="file_img2">
                    <button class="coba2" id="mgs_ta2" style="display: none"></button></div>
              </div>  
                <input type="username" id="right" value="" style="font-size: 30px; text-align:center;" name="team2" class="form-control @error('namateam') is-invalid @enderror"   placeholder="Nama Team" required  >
                @error('namateam')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror
                    
              </div>             
            </div>
        </div>
      
            <div class="row gx-6">
            <div class="col">
                <div class="form-floating" style="border: solid 0px; box-shadow: 5px 6px 7px 5px #ccc; border-radius:5px;" id="box-score1">
                     <input class="form-control counter1" id="counter1" type="text" name="score1" readonly value="0" style="height: 230px; text-align: center; font-size: 120px;" >
                  </div>             
                </div>
                <div class="col-3">
                    <div class="form-floating" style="border: solid 0px; box-shadow: 5px 6px 7px 5px #ccc;border-radius:5px;" id="set">
                      <input class="form-control set_game" id="set_game" name="set" readonly value="1" style="height: 70px; text-align: center; font-size: 30px;" aria-label="Disabled input example" >
                      
                      </div>
                      <span class="btn btn-success mt-3 set_incr1" style="width: 35px; display:none;"  id="set_incr1"><i class="bi bi-plus-circle-fill"></i></span>
                      <span class="btn btn-danger mt-3 set_decr1" id="set_decr1" style="float: right;width: 35px; display:none;"><i class="bi bi-dash-circle-fill"></i></span>
                      <div class="d-flex justify-content-center">
                        <h2 style="color:red; display:none;" class="animate__animated animate__flash animate__infinite" id="jus">Deuce!</h2>
                      </div>
                    </div>
                <div class="col">
                    <div class="form-floating" style="border: solid 0px; box-shadow: 5px 6px 7px 5px #ccc;border-radius:5px;" id="box-score2">
                      <input class="form-control counter2" id="counter2" type="text" name="score2" readonly value="0" style="height: 230px; text-align: center; font-size: 120px;" aria-label="Disabled input example" >
                      </div>             
                    </div>
                </div>
                <div class="row">
                  <div class="col">
                <div class="form-floating">
                  <button class="btn btn-success mt-3 incr1" id="incr1" style="width: 50px"> <i class="bi bi-plus-circle-fill"></i> </button>
                  <button class="btn btn-danger mt-3 decr1" id="decr1" style="float: right; width: 50px;"> <i class="bi bi-dash-circle-fill"></i> </button>
                </div> 
              </div> 
                  <div class="col-3">
                <div class="form-floating">
                  
                </div> 
              </div> 
              
              <div class="col">
                <div class="form-floating">
                  <button class="btn btn-success mt-3 incr2"  id="incr2" style="width: 50px"> <i class="bi bi-plus-circle-fill"></i> </button>
                  <button class="btn btn-danger mt-3 decr2" id="decr2" style="float: right; width: 50px"> <i class="bi bi-dash-circle-fill"></i> </button>
                  <br><br>
                </div>
                </div>          
            </div>
            <div class="d-flex justify-content-center">
              <span onClick="switchText()" class="btn btn-secondary switch" style="margin-right: 20px" ><i class="bi bi-arrow-left-right"></i> Switch</span>
              {{-- @auth --}}
              {{-- <button type="submit" id="saveData" class="btn btn-primary">Save</button> --}}
              <input type="submit" value="Save" disabled  class="btn btn-primary save-data" name="" id="save_disable">
              {{-- <button disabled onClick="store()" id="save_disable" class="btn btn-primary save_disable"><i class="bi bi-save-fill"></i> Save</button> --}}
              {{-- @endauth --}}
              <span onClick="clearText()" class="btn btn-danger clear" style="margin-left: 20px"><i class="bi bi-x-circle"></i> Reset</span>
            </div>
            <br>
            {{-- @auth --}}
          <div style="text-align: center"><h2 class="animate__animated animate__zoomIn">GAME STATISTIC</h2></div>
          {{-- <div class="container">
            <div class="row">
              <div class="col-sm"></div>
              <div class="col-sm">TEAM 1</div>
              <div class="col-sm"></div>
              <div class="col-sm">TEAM 2</div>
            </div>
          </div> --}}
          <div class="container">
            <div class="row row-cols-2">
              <div class="col" style="text-align: center"><h2><b>HOME</b></h2></div>
              <div class="col" style="text-align: center"><h2><b>AWAY</b></h2></div>
            </div>
          </div>
          <div class="input-group" style="margin-bottom: 5px">
            <span class="btn btn-success tambahSpike1" id="tambahSpike1" style="margin-right: 5px">+</span> <span class="btn btn-danger kurangSpike1" id="kurangSpike1">-</span>
            <input style="text-align: center" name="spike1" type="text" class="form-control spike1" id="spike1" value="0" readonly aria-label="Disabled input example">
            <div class="form-control" style="text-align: center; background-color:rgb(219, 219, 219);"><b>SPIKE</b></div>
            <input style="text-align: center" name="spike2" type="text" class="form-control spike2" id="spike2" value="0" readonly aria-label="Disabled input example">
            <span class="btn btn-success tambahSpike2" id="tambahSpike2" style="margin-right: 5px">+</span> <span class="btn btn-danger kurangSpike2" id="kurangSpike2">-</span>
          </div>
          <div class="input-group" style="margin-bottom: 5px">
            <span class="btn btn-success tambahBlock1" id="tambahBlock1" style="margin-right: 5px">+</span> <span class="btn btn-danger kurangBlock1" id="kurangBlock1">-</span>
            <input style="text-align: center" name="block1" type="text" class="form-control block1" id="block1" value="0" readonly aria-label="Disabled input example">
            <div class="form-control" style="text-align: center; background-color:rgb(219, 219, 219);"><b>BLOCK</b></div>
            <input style="text-align: center" name="block2" type="text" class="form-control block2" id="block2" value="0" readonly aria-label="Disabled input example">
            <span class="btn btn-success tambahBlock2" id="tambahBlock2" style="margin-right: 5px">+</span> <span class="btn btn-danger kurangBlock2" id="kurangBlock2">-</span>
          </div>
          <div class="input-group" style="margin-bottom: 5px">
            <span class="btn btn-success tambahServe1" id="tambahServe1" style="margin-right: 5px">+</span> <span class="btn btn-danger kurangServe1" id="kurangServe1">-</span>
            <input style="text-align: center" name="serve1" type="text" class="form-control serve1" id="serve1" value="0" readonly aria-label="Disabled input example">
            <div class="form-control" style="text-align: center; background-color:rgb(219, 219, 219);"><b>SERVE</b></div>
            <input style="text-align: center" name="serve2" type="text" class="form-control serve2" id="serve2" value="0" readonly aria-label="Disabled input example">
            <span class="btn btn-success tambahServe2" id="tambahServe2" style="margin-right: 5px">+</span> <span class="btn btn-danger kurangServe2" id="kurangServe2">-</span>
          </div>
          <div class="input-group" style="margin-bottom: 5px">
            <span class="btn btn-success tambahOpponent1" id="tambahOpponent1" style="margin-right: 5px">+</span> <span class="btn btn-danger kurangOpponent1" id="kurangOpponent1">-</span>
            <input style="text-align: center" name="opponent1" type="text" class="form-control opponent1" id="opponent1" value="0" readonly aria-label="Disabled input example">
            <div class="form-control" style="text-align: center; background-color:rgb(219, 219, 219);"><b>OPPONENT ERROR</b></div>
            <input style="text-align: center" name="opponent2" type="text" class="form-control opponent2" id="opponent2" value="0" readonly aria-label="Disabled input example">
            <span class="btn btn-success tambahOpponent2" id="tambahOpponent2" style="margin-right: 5px">+</span> <span class="btn btn-danger kurangOpponent2" id="kurangOpponent2">-</span>
          </div>
          {{-- @endauth --}}
          <br><br><br>
    </div>
  </form>
@endsection 
@section('js')
<script src="/js/search.js"></script>
<script src="/js/detectmobilebrowser.js"></script>
<script src="/js/increment.js"></script>
<script src="/js/scoreboard.js"></script>

<script>


    let deferredPrompt;
    window.addEventListener('beforeinstallprompt', (event) => {
      // Prevent the mini-infobar from appearing on mobile
      event.preventDefault();
      // Stash the event so it can be triggered later.
      deferredPrompt = event;
      // Update UI notify the user they can install the PWA
      // Optionally, show a button or other UI element to trigger the installation
      showInstallButton();
    });

    function showInstallButton() {
      // Implement your UI to show the install button
      // For example, display a button and add an event listener to trigger the installation
      const installButton = document.getElementById('install-button');
      installButton.style.display = 'block';

      installButton.addEventListener('click', () => {
        // Show the install prompt
        deferredPrompt.prompt();
        // Wait for the user to respond to the prompt
        deferredPrompt.userChoice.then((choiceResult) => {
          if (choiceResult.outcome === 'accepted') {
            console.log('User accepted the install prompt');
          } else {
            console.log('User dismissed the install prompt');
          }
          // Reset the deferred prompt variable
          deferredPrompt = null;
        });
      });
    }
</script>

{{-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> --}}
@endsection