<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>

  <link rel="shortcut icon"  href="{{ asset('/images/G.ico') }}">

 <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('affichageDisplay/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('affichageDisplay/css/mdb.min.css') }}" rel="stylesheet">
  <!-- our custom styles (optional) ila bghitou tmodifiw -->
  <link href="{{ asset('affichageDisplay/css/style.min.css') }}" rel="stylesheet">

  <style type="text/css">
    body{ overflow-x: hidden; }
    .view,body,html{height:100%}@media (max-width:740px){.full-page-intro{height:1000px}}.carousel{height:50%}.carousel .carousel-inner,.carousel .carousel-inner .active,.carousel .carousel-inner .carousel-item{height:100%}@media (max-width:776px){.carousel{height:100%}}.navbar{background-color:rgba(0,0,0,.5)}.page-footer,.top-nav-collapse{background-color:#1C2331}@media only screen and (max-width:768px){.navbar{background-color:#1C2331}}



 .col-md-6{
      padding: 5%;
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


  </style>
</head>

<body>


  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="{{ route('home') }}" target="_blank">
    <img class="animated zoomIn" src="{{ asset('/images/CLA.png') }}" width="175" height="50" class="float-right" alt="...">
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <!-- Right -->
          &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;




      </div>

    </div>
  </nav>
  <!-- Navbar -->

 <section><br><br><br></section>


<section class="my-5">


  <h2 class="h1-responsive font-weight-bold text-center my-5">Welcome dans GuidWilaya</h2>
  <p class="text-center w-responsive mx-auto mb-5">Cliquez sur "visiter" pour voir plus de détails.</p>
  <div class="row d-flex justify-content-center">

      <!------------------------------------------>
           <?php
            $segments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            $wilaya_id = $segments[1];
          ?>
      <!------------------------------------------>

    <div class="col-md-6">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class="img-fluid" src="{{ asset('/images/GRestaurants.jpg') }}" alt="Resaturants" style="width: 500px;height: 300px;">
        <a href="{{ route('wilaya.restaurant' ,
             ['wilaya_id' => $wilaya_id ] ) }}" >
          <div class="mask rgba-black-strong">

        </div>
        </a>
      </div>

    </div>

    <div class="col-md-6">


      <a href="{{ route('wilaya.restaurant' , ['wilaya_id' => $wilaya_id ] ) }}" class="green-text">
        <h6 class="font-weight-bold mb-3"><i class="fas fa-utensils pr-2"></i>Restaurants</h6>
      </a>

      <p> Trouvez de différentes catégories des restaurants dans la wilaya que vous avez choisi et profitez des offres de notre GuidRestaurants </p>

      <a class="btn btn-success btn-md"
      href="{{ route('wilaya.restaurant' , ['wilaya_id' => $wilaya_id ] ) }}"> Visiter</a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">

  <!-- Grid row -->
  <div class="row d-flex justify-content-center">

    <!-- Grid column -->
    <div class="col-md-6">

      <!-- Category -->
      <a href="{{  route('wilaya.hotel' , [ 'wilaya_id' => $wilaya_id ])  }}" class="pink-text">
        <h6 class="font-weight-bold mb-3"><i class="far fa-building pr-2"></i>Hotels</h6>
      </a>
      <!-- Post title -->
      <!-- Excerpt -->
      <p>Vous partez en vacances ou en voyage d’affaires, vous recherchez une auberge de jeunesse
      ou un hôtel 5 étoiles, GuidHotel vous permet de trouver ce que vous cherchiez dans la wilaya que vous avez choisi.</p>

      <a class="btn btn-pink btn-md mb-lg-0 mb-4" href="
      {{  route('wilaya.hotel' , [ 'wilaya_id' => $wilaya_id ])  }}">Visiter</a>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-6">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2">
        <img class="img-fluid" src="{{ asset('/images/Ghotel.jpg') }}" alt="Hotels" style="width: 500px;height: 300px;">
        <a href="
      {{  route('wilaya.hotel' , [ 'wilaya_id' => $wilaya_id ])  }}">
          <div class="mask rgba-black-strong"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">

  <!-- Grid row -->
  <div class="row d-flex justify-content-center">

    <!-- Grid column -->
    <div class="col-md-6">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class=" img-fluid" src="{{ asset('/images/Gbtq.jpg') }}" alt="Boutiques" style="width: 500px;height: 300px;">
         <a href="{{ route( 'wilaya.boutique' , ['wilaya_id' => $wilaya_id ] ) }}">
          <div class="mask rgba-black-strong"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-6">

      <!-- Category -->
      <a href="{{ route( 'wilaya.boutique' , ['wilaya_id' => $wilaya_id ] ) }}" class="indigo-text">
        <h6 class="font-weight-bold mb-3"><i class="fas fa-store pr-2"></i></i>Boutiques</h6>
      </a>
      <!-- Post title -->
      <!-- Excerpt -->
      <p>GuidBoutiques facilite vos achats des habilles dans la wilaya que avez choisi on vous collecte les meilleurs boutiques, amusez-vous.</p>

      <!-- Read more button -->
      <a class="btn btn-indigo btn-md"
      href="{{ route( 'wilaya.boutique' , ['wilaya_id' => $wilaya_id ] ) }}">Visiter</a>

    </div>


  </div>


  <hr class="my-5">


  <div class="row d-flex justify-content-center">


    <div class="col-md-6">


      <a href="{{ route( 'GuidTaxi' , ['wilaya_id' => $wilaya_id ] ) }}" class="green-text">
        <h6 class="font-weight-bold mb-3"><i class="fas fa-taxi pr-2"></i></i>GuidTaxi</h6>
      </a>


      <p>GuidTaxi vous met à votre disposition pleins de numéros de taxieurs de la wilaya que vous avez choisi. </p>

      <a class="btn btn-success btn-md mb-lg-0 mb-4"
      href="{{ route( 'GuidTaxi' , ['wilaya_id' => $wilaya_id ] ) }}">Visiter</a>

    </div>

    <div class="col-md-6">


      <div class="view overlay rounded z-depth-2">
        <img class="img-fluid" src="{{ asset('/images/Gtaxi.jpg') }}" alt="Taxis" style="width: 500px;height: 300px;">
        <a  href="{{ route( 'GuidTaxi' , ['wilaya_id' => $wilaya_id ] ) }}">
          <div class="mask rgba-black-strong"></div>
        </a>
      </div>

    </div>


  </div>

   <hr class="my-5">


  <div class="row d-flex justify-content-center">


    <div class="col-md-6">


      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class=" img-fluid" src="{{ asset('/images/GFood.jpg') }}" alt="Allo Food" style="width: 500px;height: 300px;">
       <a href="{{ route( 'GuidFood' , ['wilaya_id' => $wilaya_id ] ) }}">
          <div class="mask rgba-black-strong"></div>
        </a>
      </div>

    </div>

    <div class="col-md-6">


      <a href="{{ route( 'GuidFood' , ['wilaya_id' => $wilaya_id ] ) }}" class="indigo-text">
        <h6 class="font-weight-bold mb-3"><i class="fas fa-pizza-slice pr-2"></i>GuidFood</h6>
      </a>


      <p>GuidFood vous offre des numéros des restaurants qui livrent dans votre wilaya choisi. </p>


      <a class="btn btn-indigo btn-md"
      href="{{ route( 'GuidFood' , ['wilaya_id' => $wilaya_id ] ) }}">Visiter</a>

    </div>


  </div>

  <hr class="my-5">


  <div class="row d-flex justify-content-center">


    <div class="col-md-6">


      <a href="#!" class="pink-text">
        <h6 class="font-weight-bold mb-3"><i class="fas fa-images pr-2"></i>GuidLieux & Infos</h6>
      </a>

      <!-- Excerpt -->
      <p>GuidLieux vous fait découvrir les meilleurs lieux touristiques à visiter dans la wilaya que vous avez choisi, des infos, et quelques extraits historiques.</p>

      <a class="btn btn-pink btn-md mb-lg-0 mb-4">Visiter</a>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-6">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2">
        <img class="img-fluid" src="{{ asset('/images/Glieux.jpg') }}" alt="Lieux"style="width: 500px;height: 300px;">
         <a>
          <div class="mask rgba-black-strong"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->


</section>




  </main>
  <!--Main layout-->

<!-- Footer -->
<footer class="page-footer font-small mdb-color darken-3 pt-4">

    <!-- Footer Elements -->
    <div class="container">


      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-md-6">

          <!-- Video -->
          <div class="embed-responsive embed-responsive-16by9 mb-4">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rQCgFuRJfwI" allowfullscreen></iframe> <!-- video don't go to algeria by Tolt  -->
          </div>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 copyright
      <a href="www.esi-sba.dz">Esi Sba</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


  <!-- SCRIPTS -->
    <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('affichageDisplay/js/jquery-3.3.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('affichageDisplay/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('affichageDisplay/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('affichageDisplay/js/mdb.min.js') }}"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>

</body>

</html>
