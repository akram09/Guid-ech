<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>  
     body{               /* desing d page font avec background hoggar */
         margin: 0;    
         padding: 0;
         font-family: 'Comic sans MS';
         background: url("/images/back2.jpeg"); 
         background-position:center;
         background-size:cover;}
    .register-top{   /* positionnement de form */
        margin:30px;
        margin-left:350px;
        margin-right:100px;
       }
    .register-container {    /* design le forme */
        background:; 
        background-size:; 
        border:2px solid:#c44569 ;
        border-radius:8px; 
        margin:0 auto; 
        padding:50px;
        }
    .text-color{color:#130f40 ;margin-left:30px;}    /* coleur et postionnement de mot txt Guid-ech   */
    .text{    /* couleur de txt au dessus de form */
            color:#0c2461;
            margin-left:70px
        }
    
   












    </style>  
</head>


         <div class="col-sm-8 col-sm-4 col-sm-offset-2"> <!--col-sm-8--> 
         <div class="col-sm-12 col-sm-4"></div>
         <div class="col-sm-12 col-sm-4 register-top">  <!--class register-top--> 
            
                

                
                    <form class="form-horizontal register-container tb-padding"method="POST" action="{{ route('register') }}"> <!--forme avc methode post --> 
                        @csrf      <!--generation de token--> 
                       
                        <div class="form-group"> <!-- le champ text  Guid-ech -->
                                 <div class="col-sm-12">
                                     <h3 class="text"><span class="text-color">Guid-ech</span></h3>
                                 </div> 
                         </div>

                        <div class="form-group "> 
                            <label for="name" class="col-sm-4 col-sm-2 col-form-label ">Name:</label> <!-- le champ nom de l'utilisateur -->
                                 

                            <div class="col-sm-6 col-sm-2"> <!-- generation de erreurs de saisi-->
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block" ><!-- "help-block" est une classe de bootstrap pour pour indiquer un bloc de texte d'aide pour un contrôle de formulaire donné-->
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 col-sm-2 col-form-label ">E-mail:</label> <!-- le champ Email de l'utilisateur -->

                            <div class="col-sm-6 col-sm-2"> <!-- generation de erreurs de saisi-->
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block" ><!-- "help-block" est une classe de bootstrap pour pour indiquer un bloc texte d'aide pour un contrôle de formulaire donné-->
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 col-sm-2  col-form-label ">Password:</label> <!-- le champ mot de passe  -->

                            <div class="col-sm-6 col-sm-2 "> <!-- generation de erreurs de saisi-->
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group"> <!-- le champ confirmer le mot de passe -->
                            <label for="password-confirm" class="col-md-4 col-sm-2 col-form-label ">Confirm Password:</label>

                            <div class="col-sm-6 col-sm-2">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group"> <!-- le champ country -->
                        <label for="country" class="col-md-4 col-sm-2 col-form-label ">Country</label>
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

                        <div class="form-group">    <!-- champ ville -->
                        
                        <label for="city"class="col-md-4 col-sm-2 col-form-label ">City </label>
                        
                        <div class="col-sm-6 col-sm-2">

                        <input id="city"type="text"class="form-control" name="city" value="{{ old('city') }}" required autofocus>

                        @if ($errors->has('city')) <!-- generation des erreurs de saisi  -->
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                         @endif
                        </div>
                        </div>


                        <div class="form-group" >    <!-- champ address -->
                       
                        <label for="address"class="col-md-4 col-sm-2 col-form-label ">Address</label>
                       
                        <div class="col-sm-6 col-sm-2">

                        <input id="address"type="text"class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                        @if ($errors->has('address')) <!-- generation des erreurs de saisi  -->
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                         @endif
                        </div>
                        </div>








                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit"    value="register" class="btn btn-danger  " >
                                    {{__('Register')}}
                                </button>
                            </div>
                        </div>
                    </form>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <h5 class="text"> Already have an account <a href="{{ route('login') }}" > Sign In </a>
                    <h5 class="text"> Developed By "Guid-ech Team" <a href="www.esi-sba.dz" > ESI-SBA </a></h5>
                    <h5 class="text"> Mme B.klouche <a href="b.klouche@esi-sba.dz" > G-mail </a></h5>
               
            
        </div>
    </div><!--col-sm-8--> 
 

</html>