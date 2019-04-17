<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>change password</title>
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
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/profile') }}"><i class="fas fa-arrow-circle-left"></i>back
              
            </a>
          </li>
          

        </ul>
        <!-- Collapsible content -->
       <div class="collapse navbar-collapse" id="navbarSupportedContent">

                

  </div>
  <!-- Collapsible content -->

         

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons"> <!-- affichage username et la photo -->
         

                  <div class="dropdown">
             <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2" aria-haspopup="true" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                  <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"> {{ Auth::user()->name }} <span class="caret"></span>
              </a>

<div class="dropdown-menu dropdown-primary">  <!-- drop menu logout -->
  @csrf
  
    <a class="dropdown-item" href="{{ url('/logout') }}"  onclick="event.preventDefault();
       document.getElementById('logout-form').submit();" ><i class="fas fa-sign-out-alt"></i>Logout</a>
 </div>
        </div>

        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('/images/alg1.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center"> 
  
           <div class="container">   <!-- change password container -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                     <h5 class="card-header info-color white-text text-center py-4">
                          <strong>Change Password</strong>
                     </h5>

                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="md-form" method="POST" action="{{ url('changePassword') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                              

                                <div class="col-md-6">
                                    <input id="current-password" type="password" class="form-control" name="current-password" placeholder="Current Password" required>

                                    @if ($errors->has('current-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
<hr>
                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                

                                <div class="col-md-6">
                                    <input id="new-password" type="password" class="form-control" name="new-password" placeholder="New Password" required>

                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
<hr>
                            <div class="form-group">
                                

                                <div class="col-md-6">
                                    <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" placeholder="New Password Confirmation" required>
                                </div>
                            </div>

                            <div class="md-form mb-5">
                                <div class="text-center mb-3">
                                    <button type="submit" class="btn btn-info btn-block btn-rounded z-depth-1a">
                                        Change Password
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
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
