<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
 
  <title>Hotels</title>
 
  <link rel="shortcut icon"  href="{{ asset('/images/G.ico') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('affichageDisplay/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('affichageDisplay/css/mdb.min.css') }}" rel="stylesheet">
  <!-- our custom styles (optional) ila bghitou tmodifiw -->
  <link href="css/style.min.css" rel="stylesheet">

  <link href="{{ asset('affichageDisplay/css/rating.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
  
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
</head>
<style type="text/css">
  h3{
    color: #ffffff;
  }
  #search{
    color: black;
  }
  .pow{
    background-image:url('/images/D.png');
    height: 66px;
    width: 75px;
    background-repeat: no-repeat;
  }
  .wowo{
    background-image:url('/images/F.png');
    height: 66px;
    width: 75px;
    background-repeat: no-repeat;
  }
  nav {
    background-color : #1C2331;
  }
</style>

<body style="background-color: #ffffff;">

  <!--Main Navigation-->

    <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="{{ route('home') }}" target="_blank">
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
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color: black;">

        <!-- Left -->
        
        
        <!-- Collapsible content -->

              <!--To provide parametre for route -->
              <?php
            $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            $wilaya_id = $uriSegments[1];
          ?>
              <!------------------------------------------>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="form-inline ml-auto"
                action=" {{ route('searchhot' , ['wilaya_id' => $wilaya_id]) }} ">
                 <div class="md-form my-0">
                <input style="color : white;" id="search" class="form-control" name ="term"
                type="text" placeholder="Search" aria-label="Search">
                </div>
                   <button class="btn btn-outline-primary btn-rounded waves-effect btn-sm"
                   type="submit"><i class="fas fa-search"></i> OK</button>
               </form>
               <a class="pow" href="{{ url('/localisation') }}"></a>
               <a class="wowo" href="{{ url('/dis') }}"></a>

  </div>

      </div>
      <ul class="navbar-nav nav-flex-icons"> <!-- affichage username et la photo -->
         

                  <div class="dropdown">
             <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2" aria-haspopup="true" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                  <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"> {{ Auth::user()->name }} <span class="caret"></span>
              </a>

<div class="dropdown-menu dropdown-primary">  <!-- drop menu logout and change password -->
  @csrf
  <a class="dropdown-item" href="{{ url('/changePassword') }}"><i class="fas fa-user-edit"></i>change password</a>
    <div >
           <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <button type="button" class="dropdown-item">
          <i class="fas fa-power-off"></i>  @lang('profile.logout')</button>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        </a>
    </div>

    </div>
  </nav>
  <!-- Navbar ------------------------------------------------------------------->

    <!--Main Navigation-->
<div style="background-image: url('/images/hotel.jpg'); background-repeat: no-repeat; 
background-size: cover; height: 550px; width: 100%;"> </div>
  <!--Main layout-->


<br>
@if (count($elements) > 0 )
         <?php
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        ?>

  <h2 style="color: black;text-align: center;">On vous propose les meilleurs hôtels de tous types
de votre wilaya choisi.</h2>

  <main class="mt-5 pt-5">
    <div class="container">
        @foreach($elements as $element)

        <!--Grid row-->
         <div class="row mt-3 wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
            <div class="view overlay rounded z-depth-1">
              <img src="\{{$element->images}}" class="img-fluid">
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
            <h4 class="black-text"><strong>Hotel {{ $element->name }}</strong></h4>

            <h6 class="black-text">{{ $element->déscription }}</h4>
            <br>
            <input id="input-1" name="input-1" class="rating rating-loading" 
            data-min="0" data-max="5" data-step="0.1" value="{{ $element-> averageRating }}" 
            data-size="xs" disabled="">
            </p>
            <form action="{{ route('ratehotel')}}" method="POST">
            {{ csrf_field() }}
              <div class="rating"> 
                <input id="input-1" name="rate" class="rating rating-loading" 
                data-min="0" data-max="5" data-step="1" 
                value="{{ $element->userAverageRating }}" data-size="xs">
                <input type="hidden" name="id" required="" value="{{ $element->id }}">
                <span class="review-no"></span>
                <br/>
                <button class="btn btn-primary btn-md">Submit Review</button>
              </div>
            </form>  
          </div>
          <!--Grid column-->

        </div>


        <!--Grid row-->

        
              @endforeach

              {{ $elements -> links() }}
              @elseif (count($all) == 0 )
             <div class="vide" style="margin-left: 20%;margin-top: 3%;margin-bottom: 3%;">
               <h1>Désolé Aucun Hotel à afficher pour le moment.</h1>
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

              
<hr class="mb-5">

      </section>
      <!--Section: Cards-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

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
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>


    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="www.esi-sba.dz" target="_blank"> Esi Sba </a>
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
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
