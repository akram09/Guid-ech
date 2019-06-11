<!DOCTYPE html>
<html>
<head>
  
<title>GuidTaxi</title>
  <link rel="shortcut icon"  href="{{ asset('/images/G.ico') }}">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="{{ asset('affichageDisplay/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('affichageDisplay/css/mdb.min.css') }}" rel="stylesheet">
  <!-- our custom styles (optional) ila bghitou tmodifiw -->
  <link href="{{ asset('affichageDisplay/css/style.min.css') }}" rel="stylesheet">
  <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
 
  <style type="text/css">

html,
    body,
    header,
    .view {
      height: 100%;
    }
    .jon{
     padding-top: 20%;
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
                  background:#1C2331!important;
              }
          }





  </style>

</head>

<body >
   <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

     <!-- Brand -->
      <a class="navbar-brand" href="" target="_blank">
    <img class="animated zoomIn" src="{{ asset('/images/CLA.png') }}" width="175" height="50" class="float-right" alt="...">
      </a>
      
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

        </ul>
      
         

      </div>

    </div>
  </nav>
  <!-- Navbar -->

<div class="jon" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="text-white text-center py-5 px-4">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>404 Page not found</strong></h2>
      <p class="mx-5 mb-5">slm 3likom by by
      </p>
      
    </div>
  </div>
</div>

    

<!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="#" target="_blank"> Esi-sba </a>
    </div>
    

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
