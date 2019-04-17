<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Sign up</title>
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
  


   <div class="modal fade" id="elegantModalForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
     
                               <div class="modal-dialog" role="document">
                            <div class="modal-content form-elegant">
                                <!--Header-->
                          <div class="modal-header text-center">
                              <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign up</strong></h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                             <!--/Header-->
   <!--Body-->
   <div class="modal-body mx-4">
                   <form class="form-horizontal register-container tb-padding"method="POST" action="{{ route('register') }}"> <!--forme avc methode post --> 
                        @csrf      <!--generation de token--> 
                       
                    
                        <div class="md-form mb-5"> 
                            <label for="name" data-error="wrong" data-success="right">Name</label> <!-- le champ nom de l'utilisateur -->
                                 

                            <div class="col-sm-6 col-sm-2"> <!-- generation de erreurs de saisi-->
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block" ><!-- "help-block" est une classe de bootstrap pour pour indiquer un bloc de texte d'aide pour un contrôle de formulaire donné-->
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="md-form mb-5">
                            <label for="email" data-error="wrong" data-success="right">E-mail</label> <!-- le champ Email de l'utilisateur -->

                            <div class="col-sm-6 col-sm-2"> <!-- generation de erreurs de saisi-->
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block" ><!-- "help-block" est une classe de bootstrap pour pour indiquer un bloc texte d'aide pour un contrôle de formulaire donné-->
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="md-form pb-3">
                            <label for="password" data-error="wrong" data-success="right">Password</label> <!-- le champ mot de passe  -->

                            <div class="col-sm-6 col-sm-2 "> <!-- generation de erreurs de saisi-->
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="md-form pb-3"> <!-- le champ confirmer le mot de passe -->
                            <label for="password-confirm" data-error="wrong" data-success="right" >Confirm Password</label>

                            <div class="col-sm-6 col-sm-2">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="md-form mb-5"> <!-- le champ country -->
                       
                        <div class="col-sm-6 col-sm-2">
                           <label for="country" data-error="wrong" data-success="right">Country</label>
                        <select class="form-group" name="country" id="country">  <!-- selection de pays -->
                          
                         <option value="#"> Algérie</option>
                         <option value="#"> Maroc</option>
                         <option value="#"> Tunisie</option>
                         <option value="#"> France</option>
                         <option value="#"> Espagne</option>
                         
                        
                        
                        
                        
                        
                        
                        </select>
                        @if ($errors->has('country')) <!-- generation des erreurs de saisi  -->
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                         @endif
                        </div>
                        </div>

                        <div class="md-form mb-5">    <!-- champ ville -->
                        
                        <label for="city" data-error="wrong" data-success="right">City</label>
                        
                        <div class="col-sm-6 col-sm-2">

                        <input id="city"type="text"class="form-control" name="city" value="{{ old('city') }}" required autofocus>

                        @if ($errors->has('city')) <!-- generation des erreurs de saisi  -->
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                         @endif
                        </div>
                        </div>


                        <div class="md-form mb-5" >    <!-- champ address -->
                       
                        <label for="address" data-error="wrong" data-success="right">Address</label>
                       
                        <div class="col-sm-6 col-sm-2">

                        <input id="address"type="text"class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                        @if ($errors->has('address')) <!-- generation des erreurs de saisi  -->
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                         @endif
                        </div>
                        </div>

                            <div class="form-check">
                                 
                                  <input class="form-check-input" type="checkbox" id="checkbox624">
                                  <label for="checkbox624" class="light-blue-text form-check-label">Accept the<a href="#" class="text-primary">
                                 Terms and Conditions</a></label>
                            </div>







                        <div class="md-form mb-5">
                            <div class="col-sm-12">
                                <button type="submit"    value="register" class="btn blue-gradient btn-block btn-rounded z-depth-1a" >
                                    {{__('Register')}}
                                </button>
                                                 <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign up
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
        <p class="font-small grey-text d-flex justify-content-end"> a member? <a href="" class="blue-text ml-1" >
            Sign In</a></p>
      </div>
                            </div>
                        </div>
                    </form>
  </div>     <!-- /body-->                

                            </div>
                               </div>
   </div>

<div class="text-center">
  <a href="" class="btn btn-default" data-toggle="modal" data-target="#elegantModalForm1">Launch
    modal sign up Form</a>
</div>  
    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

 









 








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
