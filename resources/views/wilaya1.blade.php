<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <title>Guid-ech | Wilaya </title>
      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
          <!-- ========== Links ==========-->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">  
  <meta name="csrf-token" content="{{ csrf_token() }}">

 
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
                  background:#FFFFFF!important;
              }
          }



.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column  */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 2200px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/*les liens*/
.lie{background-color: #FFFFFF; display: block;}

.container 
{
  position: relative;display:block;
  width: 50%; margin-top: 100px;
}

.image {
  display:block; 
  width: 250px;
  height: 250px; border-radius: 56%;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #000;
  overflow: hidden;
  width: 250px;
  height: 250px;border-radius: 60%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.container:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1); 
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.tablink {
  background-color: #FFFFFF;
  color: black;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #FFFFFF;
}

/* Style the tab content */
.tabcontent {
  color: white;
  display: none;
  padding: 50px;
  text-align: center;
}
#nv {

  background-color:#FFFFFF;
  position: fixed; /* Sticky/fixed navbar */
  width: 100%;
  top: 0; /* At the top */
z-index: 99;
}

</style>
</head> 



<body >
   


<!--==  Navigation ==-->
<nav id="nv">

            <!-- LOGO -->
      <a class="navbar-brand" href="" target="_blank">
    <img class="animated zoomIn" src="{{ asset('/images/CLA.png') }}" width="175" height="50"  class="float-right" alt="..." style="position: relative;left: 50px; top: 40px;">
      </a>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="Food-fair-toggle">
            <ul class="nav navbar-nav navbar-left" style="position: relative;top: 30px;">
                <li><a class="nav-link" href="{{ url('/home') }}" style="position: relative;left: 150px;">Home</a>
              <span class="sr-only" >(current)</span>
                </li>
            </ul>
        
        


         <form class="form-inline md-form mr-auto mb-4" style="position: relative;top: 40px; left: 400px;">
  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
  <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit" style="position: relative;bottom: 15px;">OK</button>
</div>
                 <ul class="nav navbar-nav navbar-right"> <!-- navbar-nav nav-flex-icons"////affichage username et la photo -->
                  <div class="dropdown" style="position: relative;right: 50px; bottom: 16px;" >
             <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2" aria-haspopup="true" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                  <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:30px; height:30px; position:absolute; top:0.5px; left:10px; border-radius:50%"> {{ Auth::user()->name }} <span class="caret"></span>
              </a>

        <div class="dropdown-menu dropdown-primary">  <!-- drop menu logout and change password -->
  @csrf
  <a class="dropdown-item" href="{{ url('/changePassword') }}"  style="text-decoration-line: none;">
  change password </a><span class="glyphicon glyphicon-edit"></span>

                <div >
                 <a href="{{ route('logout') }}" class="dropdown-item" style="text-decoration-line: none;"> Logout</a>
                   <span class="glyphicon glyphicon-off"></span>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                            </form>
                 </div>
               </div>
             </div>
           </ul>
        </div><!-- navbar-collapse -->
      </nav>
<!--BODY-------------------------------------------------------------------------->
<div class="row">
  <div class="column" style="background-color:#FFFFFF;">
<div class="lie">
<div class="container">
      <h3 style="position: relative;left:3px;width: 1500px;" >Cliquez sur les cerlces et découvrez tous que vous avez besoin dans votre wilaya choisi!</h3>
 <a href=""><img src="/images/guidH.png" alt="hotel" class="image">
  <div class="overlay">
    <div class="text">GuidHôtels</div>
  </div>
</a>
</div>
<div class="row" style="position: relative;left: 500px;bottom: 200px;">
  <div class="col-lg"> <h3>Vous partez en vacances ou en voyage d’affaires, vous recherchez une auberge de jeunesse ou un hôtel 5 étoiles, GuidHotel vous permet de trouver l'hôtel dans la wilaya que vous avez choisi.</h3></div></div>
 
  <div class="container">
 <a href=""><img src="/images/guidR.png" alt="restaurant" class="image">
 
  <div class="overlay">
    <div class="text"> GuidRestaurants</div>
  </div>
</a>
</div>
<div class="row" style="position: relative;left: 500px;bottom: 200px;">
  <div class="col-lg">
   <h3>  Trouvez de différentes catégories des restaurants dans la wilaya que vous avez choisi et profitez des offres de notre GuidRestaurants </h3>
 </div>
</div>
 
  
<div class="container">
 <a href=""><img src="/images/guidB.png" alt="boutique" class="image">

  <div class="overlay">
    <div class="text"> GuidBoutiques</div>
  </div>
</a>
</div>

<div class="row" style="position: relative;left: 500px;bottom: 200px;">
  <div class="col-lg"> <h3>GuidBoutiques facilite vos achats des habilles dans la wilaya que avez choisi on vous collecte les meilleurs boutiques, amusez-vous.</h3></div></div>


 <div class="container">
 <a href=""><img src="/images/guidF.png" alt="food" class="image">
  <div class="overlay">
    <div class="text">GuidFood</div>
  </div></a></div>
  <div class="row" style="position: relative;left: 500px;bottom: 200px;">
  <div class="col-lg"> <h3>GuidFood vous offre des numéros des restaurants qui livrent dans votre wilaya choisi. </h3></div></div>

   <div class="container">
 <a href=""><img src="/images/guidT.png" alt="taxi" class="image">
  <div class="overlay">
    <div class="text">GuidTaxi</div>
  </div></a></div>
  <div class="row" style="position: relative;left: 500px;bottom: 200px;">
  <div class="col-lg"> <h3>GuidTaxi vous met à votre disposition pleins de numéros de taxieurs de la wilaya que vous avez choisi. </h3></div></div>

<div class="container">
 <a href=""><img src="/images/p.png" alt="place" class="image">
  <div class="overlay">
    <div class="text">GuidLieux & Infos</div>
  </div></a>
</div>
<div class="row" style="position: relative;left: 500px;bottom: 200px;">
  <div class="col-lg"> <h3>GuidLieux vous fait découvrir les meilleurs lieux touristiques à visiter dans la wilaya que vous avez choisi, des infos, et quelques extraits historiques. </h3></div></div>


</div>
</div>
</div>




<div class="footer" style="position: relative;top: 800px;">
<!-- Footer -->
<footer   style="background-color: #00004d;">
    <div class="container text-center">
      <small> 2019 &copy; Copyright Esi SBA</small>
    </div>
  </footer>
</div>




  <!--/.Footer-->



<script>
function openCity(cityName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(cityName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();




</script>



 <!-- ========== scripts ==========--> 



<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.mixitup.min.js') }}" ></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.hoverdir.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jQuery.scrollSpeed.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
</script>
</body>
</html>
