<!DOCTYPE html>
<html>
<head>
  
<title>GuidFood</title>

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
      <img class="animated zoomIn"  src="{{ asset('/images/CLA.png') }}" href="{{ route('home') }}"
      width="175" height="50" class="float-right" alt="...">

      
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
        
        <!-- Collapsible content -->
       <div class="collapse navbar-collapse" id="navbarSupportedContent">

       <!--To provide parametre for resto route -->
       <?php 
            $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            $wilaya_id = $uriSegments[1];
          ?>
              <!------------------------------------------>

                <form class="form-inline ml-auto" action="{{ route('searchfood' , ['wilaya_id' => $wilaya_id]) }}">
                 <div class="md-form my-0">
                <input style="color : white;" class="form-control" type="text" 
                name="term" placeholder="Search" aria-label="Search">
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
<div class="view full-page-intro" style="background-image: url('/images/guidfood.jpg'); background-repeat: no-repeat; background-size: cover;">
</div>
<!----------------------->
@if (count($elements) > 0 )
         <?php
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        ?>

<h1 class="my-5 h1 text-center">Réstaurants qui font de la livraison à votre wilaya choisi </h1>
<!-- Portfolio Gallery Grid -->
<div class="row">
   @foreach($elements as $element)
  <div class="column ">
  
    <div class="content">
      <img src="\storage\{{ $element->Image_menu }} "  style="width: 70%">
      <p>Contact : <strong>{{ $element->Num }}</strong></p>
    </div>
  </div>
  @endforeach
  
  {{ $elements -> links() }}
</div>

 </div>  
 @elseif (count($all) == 0 )
             <div class="vide" style="margin-left: 20%;margin-top: 3%;margin-bottom: 3%;">
               <h1>Désolé Aucun Restaurant à afficher pour le moment.</h1>
               <h4>Aidez-nous à ajouter des informations pour cette page en cliquant
                 <a id="contact" href="{{ route('home') }}/#ContactUs"> ICI</a>.</h3>
                 <style>
                    
                    #contact:visited { color: #1C2331; }
                    #contact {
                      color : #1C2331;
                      text-decoration : underline;
                    }
}

                   </style>
               <br>
             </div>@elseif ((count($elements) == 0) && (sizeof($uriSegments) == 4 ))

<div class="vide" style="margin-left: 20%;margin-top: 3%;margin-bottom: 3%;">
  <h1>Désolé Aucun résultats trouvée.</h1>
  <br>
</div>             

 @endif

              
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
