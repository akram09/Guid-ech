<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  @foreach($elements as $element)
  <title>Guid  </title>
  @endforeach
  <link rel="shortcut icon"  href="{{ asset('/images/G.ico') }}">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('affichageDisplay/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('affichageDisplay/css/mdb.min.css') }}" rel="stylesheet">
  <!-- our custom styles (optional) ila bghitou tmodifiw -->
  <link href="css/style.min.css" rel="stylesheet">
</head>
<style type="text/css">
body{overflow-x: hidden;}
  h3{
    color: #ffffff;
  }
  #search{
    color: black;
  }
</style>

<body style="background-color: #ffffff;">

  <!--Main Navigation-->

    <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="" target="_blank">
    <img src="{{ asset('/images/GRIS.png') }}" width="175" height="50" class="float-right" alt="...">
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
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/home') }}" style="color: black;">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
            <!-- Features -->
      <li class="nav-item dropdown mega-dropdown active">
        <a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink2" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Features
          <span class="sr-only">(current)</span>
        </a>
        <div class="dropdown-menu mega-menu v-2 z-depth-1 pink darken-4 py-5 px-3"
          aria-labelledby="navbarDropdownMenuLink2">
          <div class="row">
            <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
              <h6 class="sub-title text-uppercase font-weight-bold white-text">Featured</h6>
              <ul class="list-unstyled">
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Lorem ipsum dolor sit amet
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Consectetur adipiscing elit
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Sed do eiusmod tempor incididunt
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Ut labore et dolore magna
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Ut enim ad minim veniam
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
              <h6 class="sub-title text-uppercase font-weight-bold white-text">Related</h6>
              <ul class="list-unstyled">
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Quis nostrud exercitation
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Duis aute irure dolor in
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Laboris nisi ut aliquip ex ea commodo consequat
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Reprehenderit in voluptate
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Esse cillum dolore eu fugiat nulla pariatur
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-xl-3 sub-menu mb-md-0 mb-xl-0 mb-4">
              <h6 class="sub-title text-uppercase font-weight-bold white-text">Design</h6>
              <ul class="list-unstyled">
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Excepteur sint occaecat
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Sunt in culpa qui officia
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Sed ut perspiciatis unde omnis iste natus error
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Mollit anim id est laborum
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Accusantium doloremque laudantium
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-xl-3 sub-menu mb-0">
              <h6 class="sub-title text-uppercase font-weight-bold white-text">Programming</h6>
              <ul class="list-unstyled">
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Totam rem aperiam eaque
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Beatae vitae dicta sun
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Quae ab illo inventore veritatis et quasi
                    architecto
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Nemo enim ipsam voluptatem
                  </a>
                </li>
                <li>
                  <a class="menu-item pl-0" href="#!">
                    <i class="fas fa-caret-right pl-1 pr-3"></i>Neque porro quisquam est
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
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
                <input id="search" class="form-control" type="text" placeholder="Search" aria-label="Search">
                </div>
                   <button class="btn btn-outline-primary btn-rounded waves-effect btn-sm" type="submit"><i class="fas fa-search"></i> OK</button>
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
  <!-- Navbar ------------------------------------------------------------------->

    <!--Main Navigation-->
<div  style="background-image: url('/images/btq.jpg'); background-repeat: no-repeat; background-size: cover; height: 550px; width: 1250px;"> </div>
  <!--Main layout-->


  <h2 style="color: black;text-align: center;">On vous propose les meilleurs boutiques de tout types
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
              <img src="{{$element->Bimages}}" class="img-fluid"
                alt="bt1">
              <a href="#" target="_blank">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
            <h4 class="black-text">{{ $element->Details }}</h4>
            <a href="#" target="_blank"
              class="btn btn-primary btn-md">Visit
              <i class="fas fa-play ml-2"></i>
            </a>
          </div>
          <!--Grid column-->

        </div>

        
        <!--Grid row-->

        <hr class="mb-5">
              @endforeach
        
        <hr class="mb-5">

        <!--Pagination-->
        <nav class="d-flex justify-content-center wow fadeIn">
          <ul class="pagination pg-blue">

            <!--Arrow left-->
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>

            <li class="page-item active">
              <a class="page-link" href="#">1
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">5</a>
            </li>

            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
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
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
