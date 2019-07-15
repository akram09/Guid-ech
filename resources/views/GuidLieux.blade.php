<!DOCTYPE html>
<html lang="en">
<head>
  
<title>Places</title>

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
<!--code jquery pour hide/show le menu -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
  </script>
  <script type="text/javascript">
$(document).ready(function(){
  $("button").click(function(){
    $(".pic").toggle();
  });
});
</script>
<!------------------------------------------>
 
  <style type="text/css">
  body{overflow-x: hidden;}

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
                  background:#1C2331!important;
              }
          }
.row {
  margin: 8px -16px;
}
.row,
.row > .column {
  padding: 8px;
}
.column {
  float: left;
  width: 33.33%;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.content {
  background-color: white;
  padding: 10px;
}
.show {
  display: block;
}

  </style>

</head>

<body >
   <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="" target="_blank">
    <img class="animated zoomIn"  src="{{ asset('/images/CLA.png') }}" width="175" height="50" class="float-right" alt="...">
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
        <!-- Collapsible content -->
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <!--To provide parametre for route -->
       <?php
            $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            $wilaya_id = $uriSegments[1];
          ?>
              <!------------------------------------------>

                <form class="form-inline ml-auto" 
                action="{{ route('searchplace' , ['wilaya_id' => $wilaya_id]) }}">
                 <div class="md-form my-0">
                <input class="form-control" type="text" 
                style="color : white;" name="term" placeholder="Search" aria-label="Search">
                </div>
                   <button class="btn btn-outline-primary btn-rounded waves-effect btn-sm" 
                   type="submit"><i class="fas fa-search"></i> OK</button>
               </form>

  </div>
  <!-- Collapsible content -->

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons"> <!-- affichage username et la photo -->
         

                  <div class="dropdown">
             <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2" aria-haspopup="true" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                  <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"> {{ Auth::user()->name }} <span class="caret"></span>
              </a>

<div class="dropdown-menu dropdown-primary">  <!-- drop menu logout and change password -->
  @csrf
  <a class="dropdown-item" href="{{ url('/changePassword') }}"><i class="fas fa-user-edit"></i>change password</a>
  <div >
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">

            <button type="button" class="dropdown-item">
          <i class="fas fa-power-off"></i> Logout</button>

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
<div class="view full-page-intro" style="background-image: url('/images/lieux.jpg'); background-repeat: no-repeat; background-size: cover;">
</div>
<!----------------------->
<h1 class="my-5 h1 text-center"> </h1>
<main class="mt-5 pt-5">
    <div class="container">
        @foreach($elements as $element)

        <!--Grid row-->
         <div class="row mt-3 wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
            <div class="view overlay rounded z-depth-1">
              <img src="{{$element->image}}" class="images">
              
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
          <br><br><br>
            <h2 class="black-text">{{ $element->name }}</h2>
                       
            <!-------------------------------------------------------->         
             
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class="mb-5">
              @endforeach

              {{ $elements -> links() }}


      </section>
      <!--Section: Cards-->

    </div>
  </main>
<!-- Portfolio Gallery Grid -->


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
