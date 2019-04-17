<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login</title>
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
           .form-elegant .font-small {
    font-size: 0.8rem; }

.form-elegant .z-depth-1a {
    -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
    box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); }

.form-elegant .z-depth-1-half,
.form-elegant .btn:hover {
    -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
    box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }

.form-elegant .modal-header {
    border-bottom: none; }

.modal-dialog .form-elegant .btn .fab {
    color: #2196f3!important; }

.form-elegant .modal-body, .form-elegant .modal-footer {
    font-weight: 400; }
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
    <p style="font-weight:300;font-size:0.75rem">Login</p>
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
            <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-arrow-circle-left"></i>back
              
            </a>
          </li>
          

        </ul>
        <!-- Collapsible content -->
       <div class="collapse navbar-collapse" id="navbarSupportedContent">

                

  </div>
  <!-- Collapsible content -->

         


      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('/images/alg1.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center"> 
  <div class="col-sm-4"></div>
            
             <div class="col-sm-4 register-top-login">
                <!-- Modal -->
                    <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">

                          <div class="modal-dialog" role="document">
                             <!--Content-->
                                 <div class="modal-content form-elegant">
                           <!--Header-->
                          <div class="modal-header text-center">
                          <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign in</strong></h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                          </button>
                           </div>
                            <!--Body-->
                            <div class="modal-body mx-4">

                    <form class= "form-horizontal register-container tb-padding" role="form" method="POST" action="{{ route('login') }}"> <!-- forme de login avec la meth POST -->
                        @csrf    <!-- génération de token -->
 
                       





                        <div class="md-form mb-5">  <!-- le champ e-mail de l'utilisateur -->
                            

                            <div class="col-sm-12">
                                <input id="Form-email1" type="email" class="form-control validate" name="email" value="{{ old('email') }}">
                                          <label data-error="wrong" data-success="right" for="Form-email1">Your email</label>
                                @if ($errors->has('email'))  <!-- errors= tableau des erreurs pour le champ email--> <!-- generation de erreurs de saisi-->
                                    <span class="help-block" > <!-- "help-block" est une classe de bootstrap pour pour indiquer un bloc  texte d'aide pour un contrôle de formulaire donné-->
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="md-form pb-3"> <!-- le champ mot de passe de l'utilisateur -->
                            

                             <div class="col-sm-12">
                                <input id="Form-pass" type="password" class="form-control validate" name="password" >
                                <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>

                                @if ($errors->has('password'))  <!-- errors= tableau des erreurs pour le champ mot de passe--> <!-- generation de erreurs de saisi-->
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="{{ route('password.request') }}" class="blue-text ml-1">
                                                          Password?</a></p>
                        </div>

                        <div class="form-group"> <!-- le champ mémoriser  l'utilisateur -->
                            <div class="form-check">  
                                
                                <input id="materialIndeterminate2" checked class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>  

                               <label class="form-check-label" for="materialIndeterminate2">Remember me</label>   
                                
                            </div>
                        </div>

                        
                         <div class="text-center mb-3">
          <button type="submit" value="LOG IN" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
        </div>
                       
                       <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in
          with:</p>
           <div class="row my-3 d-flex justify-content-center">
          <!--Facebook-->
          <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
          <!--Twitter-->
          <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter"></i></button>
          <!--Google +-->
          <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
        </div>
        <!--Footer-->
      <div class="modal-footer mx-5 pt-3 mb-1">
        <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="{{ route('register') }}" class="blue-text ml-1">
            Sign Up</a></p>
      </div>

                    
                    </form>

                  </div><!--body-->

                     </div><!--Content-->
                    </div>
                    </div>
                 <!-- Modal -->
                    
          
<div class="text-center">
  <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#elegantModalForm">Launch
    modal Login Form</a>
</div>      
         
    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

   </div>









 









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
