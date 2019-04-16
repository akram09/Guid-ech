<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>home</title>
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

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="#" target="_blank">
        <strong>Guidech</strong>
      </a>
<p style="font-weight:300;font-size:0.75rem">Password Change</p>
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
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">bla bla</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">bla bla 2</a>
          </li>
          

        </ul>
        <!-- Collapsible content -->
       <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="form-inline ml-auto">
                 <div class="md-form my-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </div>
                  <button class="btn btn-outline-primary btn-rounded waves-effect btn-sm" type="submit"><i class="fas fa-search"></i></button>
               </form>

  </div>
  <!-- Collapsible content -->

         &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; 

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
         

        

           <div class="dropdown">
             <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2" aria-haspopup="true" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                  <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"> {{ Auth::user()->name }} <span class="caret"></span>
              </a>

<div class="dropdown-menu dropdown-primary">
                                <a class="dropdown-item" href="{{ url('/profile') }}"><i class="fas fa-user-circle"></i>Profile</a>
                              <a class="dropdown-item" href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt"></i>Logout</a>
   </div>
        </div>


        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('/images/alg3.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">about guid-ech</h1>

            <hr class="hr-light">

            <p>
              <strong>bla bla bla bla bla bla bla bla</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>bla bla bla bla bla bla bla blabla bla bla bla bla bla bla blabla bla bla bla bla bla bla blabla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla</strong>
            </p>

            <a target="_blank" href="#" class="btn btn-indigo btn-lg">visit
              <i class="far fa-eye"></i>
            </a>

          </div>
          <!--Grid column-->

        
        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">bla bla bla la bla</h3>
            <p>bla bla bla bla bla bla bla bla
              <strong>Guid-ech</strong> </p>
            <p>bla bla bla bla bla bla bla bla</p>
            <!-- Main heading -->

            <hr>

            <p>
              <strong>400+</strong> bla bla bla bla bla bla bla bla
              <strong>600+</strong>bla bla bla bla bla bla bla bla
              <strong>74</strong> bla bla bla bla bla bla bla bla
              <strong>bla bla bla bla bla bla bla bla</strong>
            </p>

            <!-- CTA -->
            <a target="_blank" href="#" class="btn btn-indigo btn-md">visit
              <i class="fas fa-location-arrow"></i>
            </a>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">
<!-- Section: Blog v.1 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">top posts</h2>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Category -->
      <a href="#!" class="green-text">
        <h6 class="font-weight-bold mb-3"><i class="fas fa-utensils pr-2"></i>restaurants</h6>
      </a>
      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>restaurants name</strong></h3>
      <!-- Excerpt -->
      <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis.</p>
      <!-- Post data -->
      <p>by <a><strong>admin</strong></a>,14/04/2019</p>
      <!-- Read more button -->
      <a class="btn btn-success btn-md">visit</a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Category -->
      <a href="#!" class="pink-text">
        <h6 class="font-weight-bold mb-3"><i class="fas fa-hotel"></i>hotels</h6>
      </a>
      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>Hotel name</strong></h3>
      <!-- Excerpt -->
      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
        provident.</p>
      <!-- Post data -->
      <p>by <a><strong>admin</strong></a>, 14/04/2019</p>
      <!-- Read more button -->
      <a class="btn btn-pink btn-md mb-lg-0 mb-4">visit</a>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/img%20(34).jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/img (28).jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Category -->
      <a href="#!" class="indigo-text">
        <h6 class="font-weight-bold mb-3"><i class="fas fa-store"></i>boutiques</h6>
      </a>
      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>store name</strong></h3>
      <!-- Excerpt -->
      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro qui dolorem ipsum quia sit amet.</p>
      <!-- Post data -->
      <p>by <a><strong>admin</strong></a>, 14/04/2018</p>
      <!-- Read more button -->
      <a class="btn btn-indigo btn-md">visit</a>

    </div>
    <!-- Grid column -->

    

  </div>
  <!-- Grid row -->
 <hr class="my-5">
 
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Category -->
      <a href="#!" class="pink-text">
        <h6 class="font-weight-bold mb-3"><i class="fas fa-globe-africa"></i>places</h6>
      </a>
      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>place name</strong></h3>
      <!-- Excerpt -->
      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
        provident.</p>
      <!-- Post data -->
      <p>by <a><strong>admin</strong></a>, 14/04/2019</p>
      <!-- Read more button -->
      <a class="btn btn-pink btn-md mb-lg-0 mb-4">visit</a>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/img%20(34).jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Blog v.1 -->

      <hr class="my-5">


      <hr class="mb-5">

     

    </div>
    <div> <!--co;;entqire wyqdq--></div>
 


</div>
<!-- Card -->
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
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->
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
