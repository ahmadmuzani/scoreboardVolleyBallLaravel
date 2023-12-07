{{-- @extends('layout/main')
@section('title', 'pertandingan')

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
              @foreach ($scoreboard as $sc)
           
                            <b>FULL TIME SET {{ $sc->set }}</b> 
                          
              @endforeach
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
@endsection --}}