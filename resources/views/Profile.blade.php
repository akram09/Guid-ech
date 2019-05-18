<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>User Profil</title>
  <link rel="shortcut icon"  href="{{ asset('/images/G.ico') }}">
  
  <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('affichageDisplay/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('affichageDisplay/css/mdb.min.css') }}" rel="stylesheet">
  <!-- our custom styles (optional) ila bghitou tmodifiw -->
  <link href="{{ asset('affichageDisplay/css/style.min.css') }}" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
  </style>
</head>

<body>

  <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="#" target="_blank">
        <strong>Guidech</strong>
        
      </a>
      <p style="font-weight:300;font-size:0.75rem">user Profil</p>
&nbsp; &nbsp;
&nbsp;
      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/home') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">bla bla</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">bla bla 2</a>
          </li>
        -->

        </ul>
        <!-- Collapsible content -->
       <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="form-inline ml-auto">
                 <div class="md-form my-0">
                <input class="form-control" type="text" placeholder="@lang('profile.search')" aria-label="Search">
                </div>
                   <button class="btn btn-outline-primary btn-rounded waves-effect btn-sm" type="submit"><i class="fas fa-search"></i></button>
               </form>

  </div>
  <!-- Collapsible content -->

         

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons"> <!-- affichage username et la photo -->
         

                  <div class="dropdown">
             <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2" aria-haspopup="true" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                  <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"> {{ Auth::user()->name }} 
                  <span class="caret"></span>
              </a>

<div class="dropdown-menu dropdown-primary">  <!-- drop menu logout and change password -->
  @csrf
  <a class="dropdown-item" href="{{ url('/changePassword') }}"><i class="fas fa-user-edit"></i>   @lang('profile.password_change')</a>
  <div >
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">

          <button type="button" class="dropdown-item">
          <i class="fas fa-power-off"></i>  @lang('profile.logout')</button>
        </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
    </form>
</div>

    
 </div>
        </div>

        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->


  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('/images/alger.jpg') ; background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center"> 
      <!-- user photo update  -->
 <div class="card-body card-body-cascade text-center" style=" background-image: linear-gradient(to right top, #FFFFFF, #FFFFFF, #FFFFFF, #FFFFFF, #FFFFFF);"><!-- gardient color -->
      <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"> 

            <h2>{{ $user->name }} @lang('profile.photo_up')</h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                
                     <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                     <input type="file" name="avatar">        
               
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-info btn-primary">
            </form>
        </div>
    </div>

</div>

 </div>

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

 









 







  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

 

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="#" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="#/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="#" target="_blank"> Esi-sba </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
    <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('affichageDisplay/js/jquery-3.3.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('affichageDisplay/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('affichageDisplay/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
  
</body>

</html>
