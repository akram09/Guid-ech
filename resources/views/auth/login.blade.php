
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

    <style>           /** style css pour les classes */
         body{               /* desing d page font et background hoggar*/
            margin: 0;    
            padding: 0;
            font-family: 'Comic sans MS';
            background: url("/images/background.png"); 
            background-position:center;
            background-size:cover;}
        .register-top-login {      /* positionnement de form */
            margin-top:50px;
            margin-right:100px;
            margin-left:350px;
        }
        .register-container {    /* design le forme */
            background:url("/images/background.png");; 
            background-size:cover; 
            border:2px solid:#c44569 ;
            border-radius:8px; 
            margin:0 auto; 
            padding:50px;
            
        }
        .no-padding { padding:0px; margin-left:60px;}   /* le champ remeber me */
        .form-check-input{ margin-left:45px;} /*positionnement de check input du champ Remember me */
        .margin-style{margin-top:2px;} /* le champ remember me */
        .text-color{color:#130f40 ;margin-left:45px;}    /* coleur et postionnement de mot txt Guid-ech   */ 
        a.forgot-link{color:#6D214F; margin-left:35px; text-decoration:none;}  /* lien forget password */
        a.forgot-link:hover{color:#130f40} /* l'effet hover sur lien forget password */
        .col-sm-12 input[type = "email"],.col-sm-12 input[type = "password"]{   /* design pour les champs e-mail et mot de de passe */
              border:0;
              background: url("/images/background.png");
              background-size:cover;
              display: block;
              margin: 20px auto;
              text-align: center;
              border: 2px solid #130f40; 
              padding: 14px 10px;
              width: 200px;
              outline: none;
              color: #130f40;
              border-radius: 24px;
              transition:0.25s;
            }
        .col-sm-12 input[type = "email"]:focus,.col-sm-12 input[type = "password"]:focus{  /* application de l'effet focus sur les chaps email et mot de passe */
                  width: 280px;
                  border-color: #c44569; }

        .col-sm-12 input[type = "submit"]{     /* design le button LOG IN */
                  border:0;
                  background: none;
                  display: block;
                  margin: 0px auto;
                  text-align: center;
                  border: 2px solid #130f40;
                  padding: 7px 20px;
                  outline: none;
                  color:;
                  border-radius: 24px;
                  transition: 0.25s;
                  cursor: pointer;
}
        .col-sm-12 input[type = "submit"]:hover{   /* application de l'effet hover sur le button LOG IN */
                 background:#c44569 ;
} 
        .text{    /* couleur de txt au dessus de form */
            color:#0c2461;
            margin-left:30px
        }
       


    </style>

</head>
        <div class="col-sm-4"></div>
            
             <div class="col-sm-4 register-top-login">
                
                    <form class= "form-horizontal register-container tb-padding" role="form" method="POST" action="{{ route('login') }}"> <!-- forme de login avec la meth POST -->
                        @csrf    <!-- génération de token -->
 
                        <div class="form-group"> <!-- le champ text login to Guid-ech -->
                                 <div class="col-sm-12">
                                     <h3 class="text"><span class="text-color">Guid-ech</span></h3>
                                 </div>
                         </div>







                        <div class="form-group ">  <!-- le champ e-mail de l'utilisateur -->
                            

                            <div class="col-sm-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder ="Email">

                                @if ($errors->has('email'))  <!-- errors= tableau des erreurs pour le champ email--> <!-- generation de erreurs de saisi-->
                                    <span class="help-block" > <!-- "help-block" est une classe de bootstrap pour pour indiquer un bloc  texte d'aide pour un contrôle de formulaire donné-->
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group "> <!-- le champ mot de passe de l'utilisateur -->
                            

                            <div class="col-sm-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                @if ($errors->has('password'))  <!-- errors= tableau des erreurs pour le champ mot de passe--> <!-- generation de erreurs de saisi-->
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group"> <!-- le champ mémoriser  l'utilisateur -->
                            <div class="col-xs-2">  <!-- classe col extra small 2 -->
                                
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>   <!-- condition c la valeur de la meth old est remember donc verifier ca -->

                                <div class="col-xs-10 no-padding margin-style">Remember me</div>     <!-- utilisation des classes col extra small 10 et no-padding et margin style pour le txt Remember me -->
                                
                            </div>
                        </div>

                        <div class="form-group"> <!-- pour le button login -->
                            <div class="col-sm-12">
                           
                            <input type="submit" value="LOG IN" class="btn">  <!--  le button login -->
                               

                            </div>
                        </div>

                        <div class="form-group"> <!-- le reintialisation de mot de passe -->
                            <div class="col-sm-12">
                           
                            <i class="fa fa-lock"></i> <a href="{{ route('password.request') }}" class="forgot-link">Forgot your password ! </a>     <!-- utilisation l'icon lock de font-awesome et redirection vers le lien de page password reset  -->
                               

                                  
                                   
                            </div>

                        </div>
                    </form>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <h5 class="text"> D'ont have an account !! <a href="{{ route('register') }}" > Sign up </a>
                    <h5 class="text"> Developed By "Guid-ech Team" <a href="www.esi-sba.dz" > ESI-SBA </a></h5>
                    <h5 class="text"> Mme B.klouche <a href="b.klouche@esi-sba.dz" > G-mail </a></h5>
                
            </div>
        
            </html>


           