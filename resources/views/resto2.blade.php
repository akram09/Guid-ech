 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <title>Restaurant Service</title>
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
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    


    <style>        /* ========== Sliders Dispplay ========== */  /* key=id*/
        @foreach($sliders as $key=>$slider)
            .owl-carousel .owl-wrapper, .owl-carousel .owl-item:nth-child({{ $key + 1 }}) .item
            {
                background: url({{ asset('uploads/slider/'.$slider->image) }});  background-size:1100px 550px; background-repeat:no-repeat; positio

            }
        @endforeach




#sticky-footer {
  flex-shrink: none;
}
.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column (if you want) */
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
#nv {

  background-color:#FFFFFF;
  position: fixed; /* Sticky/fixed navbar */
  width: 100%;
  height: 100px;
  top: 0; /* At the top */
z-index: 99;
}
#mylist li.active{
  background:#D4CECC;
  border-bottom: 3px ridge #fff;
  color: black !important;
}
@media(max-width: 767px)
#mylist li{
  font-size:14px;
}
 #mylist li{
  
  color: grey!important;
  display: inline-block;
  width: auto;
  padding: 6px 10px;
  margin-right: 15px;
  font-size: 0.5cm;
  cursor: pointer;
  border-radius: 3px;
  border-bottom: 2px solid rgba(255, 255, 255, 0);
 }
 @media(max-width: 767px)
#my-menu-pricing .myitem{
  width:40%;
}

ul{
  
  list-style-type: none;
}


    </style>
                     <!-- ========== scripts ==========-->
    <script src="{{ asset('frontend/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flexslider.min.js') }}"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: ".flexslider-container"
            });
        });
    </script>
</head>
<body data-spy="scroll" data-target="#template-navbar">

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
   </form>
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

 
<!--BODY---------------------------------------------------------------------->
<!--SLIDERS-->
<div style="position: relative;top: 100px;">
    <h2 style="text-align: center; font-family: Arial Black"> Découvrez notre restaurant</h2>
  </div>
<div style="position: relative;left: 60px; bottom:30px;">
  <section  id="header-slider" class="owl-carousel" >
   
    @foreach($sliders as $key=>$slider)
        <div class="item">
            <div class="container">
                <div style="position: relative;top: 3px;text-align: center;background:rgba(255, 255, 255, 0.7);  width: 500px;right: 40px;border-radius: 5px">
                    <h5>{{ $slider->title }}</h5>
                    <p>{{ $slider->sub_title }}</p>
                </div> 
            </div>
        </div>
    @endforeach
</section>
</div>

 
 <!--==  Menu   ==-->
<section id="menu-list" class="menu-list">
    <div id="w">
        <!--div  class="pricing-filter"-->
            <div class="pricing-filter-wrapper" style="background-color: white;">
                <div class="container">
                    <div class="row" >
                        <div class="col-md-10 col-md-offset-1">
                            <div class="section-header" >
                                <h2  style="text-decoration-color: black; text-align: center; position: relative;bottom:30px;font-family: Arial Black;">Voici notre menu </h2>
                                <ul id="mylist" class="clearfix">
                                    <li data-filter="all" class="filter">Tous
                                    </li>
                                    @foreach($categories as $category)    <!-- ========== category display with item ==========-->
                                        <li class="filter" data-filter="#{{ $category->slug }}">{{ $category->name }} <span class="badge">{{ $category->items->count() }}</span></li>
                                    @endforeach
                                </ul><!-- filter-list -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--/div-->

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <ul id="menu-pricing" class="menu-price">

          @foreach($items as $item)
              <!-- ========== items display ==========--> 
                            <li class="item" id="{{ $item->category->slug }}">
                                <a href="#">
                                    <img src="{{ asset('uploads/item/'.$item->image) }}" class="img-responsive" alt="Item" style="height: 300px; width: 369px;" >
                                    <div class="menu-desc text-center">
                                            <span>
                                                <h3>{{ $item->name }}</h3>
                                                {{ $item->description }}
                                            </span>
                                    </div>
                                </a>
                                <h2  style="text-decoration-color: black;">{{ $item->price }} DA</h2>
                            </li>
                          
           @endforeach
         
                    </ul>

                    <!-- <div class="text-center">
                            <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                    </div> -->

                </div>
            </div>
        </div>

    </div>
</section>
<!--==  Reserve A Table! ==-->



<section class="reservation">
   <h2 style="text-align: center; font-family: Arial Black"> Que disez-vous de reserver une table?!</h2>
    <div class="wrapper">
        <div class="container-fluid">
            <div class=" section-content">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                    
                     <?php

                         $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
                         $last = $uriSegments[1];  


                        ?>
                        
                        
                        <form class="reservation-form" method="post" action="{{ route('reservation.reserve' , [ 'id' => $last ]) }}">
                            @csrf  <!-- ========== token ==========--> 
                            <div class="row" style="position: relative;bottom:150px;">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control reserve-form empty iconified" name="name" id="name"
                                               placeholder="  &#xf007;  Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control reserve-form empty iconified" id="email"  placeholder="  &#xf1d8;  e-mail">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone"  placeholder="  &#xf095;  Phone">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control reserve-form empty iconified" name="dateandtime" id="datetimepicker1" placeholder="&#xf017;  Time">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3"  placeholder="  &#xf086;  We're listening"></textarea>
                                </div>

                                <div class="col-md-12 col-sm-12" >
                                    <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                        <span><i class="fa fa-check-circle-o"></i></span>
                                        Reserver
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                                         <!-- ========== Service Hours ==========-->
                    <div class="col-md-2 hidden-sm hidden-xs"></div>

                    <div class="col-md-4 col-sm-6 col-xs-12"> 
                        <div class="opening-time" style="position: relative;bottom: 100px;">
                            <h3 class="opening-time-title">Heures de service</h3>
                            <p>Saturday to thursday : 11 AM - 12 PM</p>
                            <p>Friday: 6:00 PM - 12:00 PM</p>

                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
                                    








<!-- Footer -->
<footer id="sticky-footer" class="py-4 bg-dark text-white-50" style="background-color: #00004d;">
    <div class="container text-center">
      <small> 2019 &copy; Copyright Esi SBA</small>
    </div>
  </footer>


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
<script src="{{ asset('frontend/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if ($errors->any())          <!-- ========== errors generation and toastr notifcation ==========--> 
    @foreach ($errors->all() as $error)
       <script>
           toastr.error('{{ $error }}');
       </script>
    @endforeach
@endif

<script>                     /*  scripts for time and in reservation (datetimepicker) js */
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: "dd MM yyyy - HH:11 P",
            showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
    })
</script>
@toastr_render        <!-- ========== toastr notification ==========-->     
</body>
</html>