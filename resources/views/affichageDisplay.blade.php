<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Restaurants</title>
  <link rel="shortcut icon"  href="{{ asset('/images/G.ico') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('affichageDisplay/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('affichageDisplay/css/mdb.min.css') }}" rel="stylesheet">
  <!-- our custom styles (optional) ila bghitou tmodifiw -->
  <link href="css/style.min.css" rel="stylesheet">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link href="{{ asset('affichageDisplay/css/rating.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
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

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">

       <!-- Brand -->
      <a class="navbar-brand" href="{{route('home')}}" target="_blank">
    <img class="animated zoomIn"  src="{{ asset('/images/GRIS.png') }}" width="175" height="50" class="float-right" alt="...">
      </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">



          <!-- Left -->
          <ul class="navbar-nav mr-auto">

            <li class="nav-item">
              <a class="nav-link waves-effect" href="{{url('/home')}}"
                target="_blank">home</a>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <a class="pow" href="{{ url('/localisation') }}"></a>
            <a class="wowo" href="{{ url('/dis') }}"></a>

              <!--To provide parametre for resto route -->
          <?php
            $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            $wilaya_id = $uriSegments[1];
          ?>
              <!------------------------------------------>


                <form class="form-inline ml-auto"
                action=" {{ route('searchresto' , ['wilaya_id' => $wilaya_id]) }} ">
                 <div class="md-form my-0">
                <input id="search" class="form-control" name="term" type="text"
                placeholder="Search" aria-label="Search">
                </div>
                   <button class="btn btn-outline-primary btn-rounded waves-effect btn-sm"
                   type="submit"><i class="fas fa-search"></i> OK</button>
               </form>

          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Jumbotron-->
      <section class="card blue-gradient wow fadeIn" id="intro">

        <!-- Content -->
        <div class="card-body text-white text-center py-5 px-5 my-5">

          <h1 class="mb-4">
            <strong>Vous allez aimer avoir faim !</strong>
          </h1>
        </div>
        <!-- Content -->
      </section>
      <!--Section: Jumbotron-->

      <!--Section: Cards-->
      <section class="pt-5">

        <!-- Heading & Description -->
        <div class="wow fadeIn">
          <!--Section heading-->
          <h2 class="h1 text-center mb-5">On vous propose les meilleurs Restaurants </h2>
        </div>
        <!-- Heading & Description -->


        <!--Grid row-->
          @foreach ($elements as $element)
         <div class="row mt-3 wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
            <div class="view overlay rounded z-depth-1">
              <img src="{{ $element->image }}" class="img-fluid"
                alt="">
              <a href="#" target="_blank">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
          </div>
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
            <h3 class="mb-3 font-weight-bold dark-grey-text">
              <strong>{{ $element -> name }}</strong>
            </h3>
            <p>
            <input id="input-1" name="input-1" class="rating rating-loading"
            data-min="0" data-max="5" data-step="0.1" value="{{ $element-> averageRating }}"
            data-size="xs" disabled="">
            </p>
            <form action="{{ route('rateresto')}}" method="POST">
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



            <a href="{{ route('resto' , ['wilaya_id' => $wilaya_id , 'id'=> $element -> id ] )  }}"
            target="_blank"  class="btn btn-primary btn-md">Visit
              <i class="fas fa-play ml-2"></i>
            </a>
          </div>

          @endforeach

          {{ $elements -> links() }}

          <!--Grid column-->



        </div>
        <!--Grid row-->

        <hr class="mb-5">


        <!--Pagination-->

      </section>
      <!--Section: Cards-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="#" target="_blank" role="button">moore
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

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

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="www.esi-sba.dz" target="_blank"> Esi sba </a>
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
</body>

</html>
