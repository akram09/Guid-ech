<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
{!! Links::track(true) !!}
<head>
  
  @laravelPWA
  <!-- Web Application Manifest -->
<link rel="manifest" href="/manifest.json">
<!-- Chrome for Android theme color -->
<meta name="theme-color" content="#000000">

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="PWA">
<link rel="icon" sizes="512x512" href="/images/icons/icon-72x72.png">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="PWA">
<link rel="apple-touch-icon" href="/images/icons/icon-72x72.png">

<link href="/images/icons/splash-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-750x1334.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1242x2208.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-828x1792.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1242x2688.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1536x2048.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1668x2224.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1668x2388.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-2048x2732.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

<!-- Tile for Win8 -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/images/icons/icon-310x310.png">

<script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js', {
            scope: '.' 
        }).then(function (registration) {
            // Registration was successful
            console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            // registration failed :(
            console.log('Laravel PWA: ServiceWorker registration failed: ', err);
        });
    }
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>welcome</title>

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
     .form-elegant .font-small {
    font-size: 0.8rem; }

.form-elegant .z-depth-1a {
    -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
    box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); }

.form-elegant .z-depth-1-half,.form-elegant .btn:hover
  {

    -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
    box-shadow: 0 5px 11px 0 
    rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); 
  }

.form-elegant .modal-header {
    border-bottom: none; }

.modal-dialog .form-elegant .btn .fab {
    color: #2196f3!important; }

.form-elegant .modal-body, .form-elegant .modal-footer {
    font-weight: 400; }
  </style>
</head>

<body>
  <div class="preloader"></div>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="" target="_blank">
    <img class="animated zoomIn" src="{{ asset('/images/CLA.png') }}" width="175" height="50" class="float-right" alt="...">
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


        <!-- Collapsible content -->
       <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- search button -->

                <form class="form-inline ml-auto">
                 <div class="md-form my-0">
                <input class="form-control" type="text" placeholder="@lang('profile.search')" aria-label="Search">
                </div>
                  <button class="btn btn-outline-primary btn-rounded waves-effect btn-sm" type="submit"><i class="fas fa-search"></i></button>
               </form>
     
   <ul class="navbar-nav nav-flex-icons">
         


          
          <li class="nav-item"> <!-- login & register -->
            <a href="" data-toggle="modal" data-target="#elegantModalForm1" class="nav-link" ><i class="fas fa-user-plus"></i>@lang('welcome.register_nav')</a>
              
          </li>
          <li class="nav-item">
           <a href="" data-toggle="modal" data-target="#elegantModalForm" class="nav-link"   ><i class="fas fa-sign-in-alt"></i>@lang('welcome.login_nav')</a>

          </li>

           <li class="nav-item">
            <a class="nav-link" target="_blank">@lang('welcome.visit_nav')<i class="fas fa-eye"></i>{{ Counter::showAndCount('welcome') }}</a> <!-- visitor counter for welcome.blade.php i can change it to get all hits for every page on the entire site-->
          </li>

        </ul>
  </div>
  <!-- Collapsible content -->

   

        <!-- Right --> 
          &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; 

     

          
      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('/images/alger.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">@lang('welcome.title')</h1>

            <hr class="hr-light">

            <p class="mb-4 d-none d-md-block">
              
          
            </p>
          </div>
          <!--Grid column-->

          

     

                
              </div>

          
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->
    




</div>

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->


   <!------------------------------------------------------------Sign up form -------------------------------------------->
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
 
                       





                        <div class="md-form mb-5">  
                            

                            <div class="col-sm-12">
                                <input id="Form-email1" type="email" class="form-control validate" name="email" value="{{ old('email') }}">
                                          <label data-error="wrong" data-success="right" for="Form-email1">Your email</label>
                                @if ($errors->has('email'))  
                                    <span class="help-block" > 
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="md-form pb-3"> 
                            

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

                            <div class="form-check">
                                 
                                  <input class="form-check-input" type="checkbox" id="checkbox624">
                                  <label for="checkbox624" class="light-blue-text form-check-label">Accept the<a href="#" class="text-primary">
                                 Terms and Conditions</a></label>
                            </div>
                            <hr>


                        </div>


                        
                         <div class="text-center mb-3">
          <button type="submit" value="LOG IN"class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
        </div>
                       
                       <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in
          with:</p>
           <div class="row my-3 d-flex justify-content-center">
          <!--Facebook-->
          <a type="button" href="{{ url('/auth/redirect/facebook') }}"  class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></a>
          <!--Twitter-->
          <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter"></i></button>
          <!--Google +-->
          <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
        </div>
        <!--Footer-->
      <div class="modal-footer mx-5 pt-3 mb-1">
        <p class="font-small grey-text d-flex justify-content-end">Not a member? <a data-toggle="modal" data-target="#elegantModalForm1" class="blue-text ml-1">
            Sign Up</a></p>
      </div>

                    
                    </form>

                  </div><!--body-->

                     </div><!--Content-->
                    </div>
                    </div>
                 <!-- Modal -->
                    
          
    
         
    </div>
     <!---------------------------------------- /sign in form --------------------------------------------->
<hr>

      <!---------------------------------------- /sign upform --------------------------------------------->
<div class="col-sm-4 register-top-login"> 
  


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


                     <label for="country" data-error="wrong" data-success="right">Country</label>
                        <div class="md-form mb-5"> <!-- le champ country -->
                       
                        <div class="col-sm-6 col-sm-2">
                          
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
        <p class="font-small grey-text d-flex justify-content-end"> a member? <a data-toggle="modal" data-target="#elegantModalForm"class="blue-text ml-1" >
            Sign In</a></p>
      </div>
                            </div>
                        </div>
                    </form>
  </div>     <!-- /body-->                

                            </div>
                               </div>
   </div>


    </div>
    <!-- sign up form-->
      

  <!--Main layout-------------------------------------------------------------------------->
  <main>
    <div class="container">

      <!---------------------------Section: Main info------------------------------>
      <section class="mt-5 wow fadeIn">

  

      </section>
      <!-----------------------------Section: Main info------------------------------->

      <hr class="my-5">

      <!--------------------------------Section: Not enough------------------------------>
      <section>

         
        <h2 class="my-5 h3 text-center">@lang('welcome.title_fonct')</h2>

        <!--First row-->
        <div class="row features-small mb-5 mt-3 wow fadeIn">

          <!--First column-->
          <div class="col-md-4">
            <!--First row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h4 class="feature-title">@lang('welcome.title_md_1')</h4>
                <h6 class="grey-text">
                   @lang('welcome.title_sm_1')
                </h6>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h4 class="feature-title">@lang('welcome.title_md_2')</h4>
                <h6 class="grey-text">
                  @lang('welcome.title_sm_2')
                </h6>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Second row-->

            

            
          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-md-4 flex-center">
            <img src="images/gf.jpg" alt="MDB Magazine Template displayed on iPhone" class="z-depth-0 img-fluid">
          </div>
          <!--/Second column-->

          <!--Third column-->
          <div class="col-md-4 mt-2">
            <!--First row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h4 class="feature-title">@lang('welcome.title_md_3')</h4>
                <h6 class="grey-text">  @lang('welcome.title_sm_3') </h6>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/First row-->

            <!--second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h4 class="feature-title">@lang('welcome.title_md_4')</h4>
                <h6 class="grey-text">@lang('welcome.title_sm_4')</h6>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/second row-->

            

          </div>
          <!--/Third column-->

        </div>
        <!--/First row-->
        <h2>    @lang('welcome.title_plus')<a href="#">  @lang('welcome.title_plus_clic'):</a></h2>
      </section>
      <!----------------------------------------Section: Not enough------------------------>

      <hr class="my-5">

      <!--------------------------Section: Main features & Quick Start---------------->
      <section>

        <h3 class="h3 text-center mb-5">@lang('welcome.title_first_visit')</h3>
        <h5>@lang('welcome.title_propo')</h5>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 px-4">

            <!--First row-->
            <div class="row">
              <div class="col-1 mr-3">
               <img src="images/qst.png" width="250%">
              </div>
              <div class="col-10">
                <h5 class="feature-title">@lang('welcome.title_c1')</h5>
                <p>@lang('welcome.title_contenu1')</p>
              </div>
            </div>
            <!--/First row-->

            <div style="height:30px"></div>

            <!--Second row-->
            <div class="row">
              <div class="col-1 mr-3">
               <img src="images/qst.png" width="250%">
              </div>
              <div class="col-10">
                <h5 class="feature-title">@lang('welcome.title_c2')</h5>
                <p>@lang('welcome.title_contenu2')</p>
              </div>
            </div>
            <!--/Second row-->

            <div style="height:30px"></div>

            <!--Third row-->
            <div class="row">
              <div class="col-1 mr-3">
               <img src="images/qst.png" width="250%">
              </div>
              <div class="col-10">
                <h5 class="feature-title">@lang('welcome.title_c3')</h5>
                <p>@lang('welcome.title_contenu3')</p>
              </div>
              <h2>@lang('welcome.title_plus_tip') <a href="#">@lang('welcome.title_plus')</a></h2>

            </div>
            <!--/Third row-->
          </div>

          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">
              <img src="images/row2.jpg" width="85%">
            <div class="embed-responsive embed-responsive-16by9">
             
            </div>

          </div>
          <!--/Grid column-->
        </div>
        <!--/Grid row-->
    
      </section>
   
<section class="team-section text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">@lang('welcome.title_team')</h2>


  <!-- Grid row -->
  <div class="row text-center">

    <!-- Grid column -->
    <div class="col-md-4 mb-md-0 mb-5">
      <div class="avatar mx-auto">
        <img src="" height=250px class="rounded z-depth-1-half" alt="Sample avatar">
      </div>
      <h4 class="font-weight-bold dark-grey-text my-4">Madani yousfi Abdelwahed</h4>
      <h6 class="text-uppercase grey-text mb-3"><strong>Esi Student</strong></h6>
      <!-- Facebook-->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
        <i class="fab fa-facebook-f"></i>
      </a>
      <!--Dribbble -->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-dribbble">
        <i class="fab fa-dribbble"></i>
      </a>
      <!-- Twitter -->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
        <i class="fab fa-twitter"></i>
      </a>
    </div>
    <!-- Grid column -->


 <!-- Grid column -->
 <div class="col-md-4">
  <div class="avatar mx-auto">
    <img src="" height=250px class="rounded z-depth-1-half" alt="Sample avatar">
  </div>
  <h4 class="font-weight-bold dark-grey-text my-4">Moncef Reggam</h4>
  <h6 class="text-uppercase grey-text mb-3"><strong>Esi student</strong></h6>
  <!--Linkedin -->
  <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-li">
    <i class="fab fa-linkedin-in "></i>
  </a>
  <!-- Twitter -->
  <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
    <i class="fab fa-twitter "></i>
  </a>
  <!--Pinterest -->
  <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-pin">
    <i class="fab fa-pinterest "></i>
  </a>
</div>
<!-- Grid column -->


 <!-- Grid column -->
 <div class="col-md-4">
  <div class="avatar mx-auto">
    <img src="" height=250px class="rounded z-depth-1-half" alt="Sample avatar">
  </div>
  <h4 class="font-weight-bold dark-grey-text my-4">Malika Dermi</h4>
  <h6 class="text-uppercase grey-text mb-3"><strong>Esi Student</strong></h6>
  <!--Linkedin -->
  <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-li">
    <i class="fab fa-linkedin-in "></i>
  </a>
  <!-- Twitter -->
  <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
    <i class="fab fa-twitter "></i>
  </a>
  <!--Pinterest -->
  <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-pin">
    <i class="fab fa-pinterest "></i>
  </a>
</div>
<!-- Grid column -->


 <!-- Grid column -->
 <div class="col-md-4">
  <div class="avatar mx-auto">
    <img src="" height=250px class="rounded z-depth-1-half" alt="Sample avatar">
  </div>
  <h4 class="font-weight-bold dark-grey-text my-4">Larbi riyane</h4>
  <h6 class="text-uppercase grey-text mb-3"><strong>Esi Student</strong></h6>
  <!--Linkedin -->
  <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-li">
    <i class="fab fa-linkedin-in "></i>
  </a>
  <!-- Twitter -->
  <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
    <i class="fab fa-twitter "></i>
  </a>
  <!--Pinterest -->
  <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-pin">
    <i class="fab fa-pinterest "></i>
  </a>
</div>
<!-- Grid column -->


 <!-- Grid column -->
 <div class="col-md-4">
  <div class="avatar mx-auto">
    <img src="" height=250px class="rounded z-depth-1-half" alt="Sample avatar">
  </div>
  <h4 class="font-weight-bold dark-grey-text my-4">Said Bouabdallah</h4>
  <h6 class="text-uppercase grey-text mb-3"><strong>Esi Student</strong></h6>
  <!--Linkedin -->
  <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-li">
    <i class="fab fa-linkedin-in "></i>
  </a>
  <!-- Twitter -->
  <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
    <i class="fab fa-twitter "></i>
  </a>
  <!--Pinterest -->
  <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-pin">
    <i class="fab fa-pinterest "></i>
  </a>
</div>
<!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4">
      <div class="avatar mx-auto">
        <img src="" height=250px class="rounded z-depth-1-half" alt="Sample avatar">
      </div>
      <h4 class="font-weight-bold dark-grey-text my-4">Ikhlas Zeblah</h4>
      <h6 class="text-uppercase grey-text mb-3"><strong>Esi student</strong></h6>
      <!--Linkedin -->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-li">
        <i class="fab fa-linkedin-in "></i>
      </a>
      <!-- Twitter -->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
        <i class="fab fa-twitter "></i>
      </a>
      <!--Pinterest -->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-pin">
        <i class="fab fa-pinterest "></i>
      </a>
    </div>
    <!-- Grid column -->
  
  </div>
  <!-- Grid row -->

</section>
<!-- Section: Team v.2 -->





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
    <!-- Button trigger modal-->
<button type="button" class="btn  " style=" margin-left: 682px" aria-haspopup="false" aria-expanded="true" data-toggle="modal" data-target="#modalRelatedContent">@lang('welcome.language')</button>

<!--Modal-->
<div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading">@lang('welcome.language')</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">

       
       <div class="row">

      <ul> 

 <li>
      <a  href="lang/en"><img src="{{ asset('/flag/en.png') }}"> <p class="text-dark">English</p></a>
 </li>
 <li>
      <a href="lang/fr"><img src="{{ asset('/flag/fr.png') }}"> <p class="text-dark">Francais</p></a>
 </li>
 <li>
      <a href="lang/ar"><img src="{{ asset('/flag/ar.png') }}">  <p class="text-dark">Arabe</p></a>
 </li>
  
      </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalRelatedContent-->

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
