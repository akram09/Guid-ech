<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">  
  <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon"  href="{{ asset('/images/G.ico') }}">

<link href="{{ asset('affichageDisplay/css/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{ asset('affichageDisplay/css/mdb.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
</head>


<body style=" background-image: url('/images/alger.jpg');  background-repeat: no-repeat; background-size: cover;">
  
<div class="container">
@if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
 <div class="card">
              <div class="card-header" style="background-color: #1C2331"><h2 class="text-info text-center"><strong>Guidech events</strong></h2></div>
              <div class="card-body" >
                  {!! $calendar_details->calendar() !!}
              </div>
            </div>

<script type="text/javascript" src="{{ asset('affichageDisplay/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('affichageDisplay/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('affichageDisplay/js/mdb.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar_details->script() !!}
</body>
</html>

