<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <title>Guid-ech | Restaurant Service </title>
  <link rel="shortcut icon"  href="{{ asset('/images/G.ico') }}">
    
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
                background: url({{ asset('uploads/slider/'.$slider->image) }});
                background-size: cover;
            }
        @endforeach
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
<nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"> <!--==  for logo ==-->
                <img  src="{{ asset('/images/CLA.png') }}" width="175" height="50"  class="logo img-responsive">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="Food-fair-toggle">
            <ul class="nav navbar-nav navbar-right">
                
                <li><a href="#menu-list">menu list</a></li>
                <li><a href="#reserve">reservation</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </div><!-- navbar-collapse -->
    </div><!-- row -->
</nav>


<!--==  Header ==-->
<section id="header-slider" class="owl-carousel">
    @foreach($sliders as $key=>$slider)
        <div class="item">
            <div class="container">
                <div class="header-content" style="background: rgba(204, 204, 204, 0.3); ">
                    <h2 class="header-title">{{ $slider->title }}</h2>
                    <p class="header-sub-title">{{ $slider->sub_title }}</p>
                </div> <!-- header-content -->
            </div>
        </div>
    @endforeach
</section>

<!--==  Menu   ==-->
<section id="menu-list" class="menu-list">
    <div id="w">
        <div class="pricing-filter">
            <div class="pricing-filter-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="section-header">
                                <h2 class="pricing-title">Our Menu </h2>
                                <ul id="filter-list" class="clearfix">
                                    <li class="filter" data-filter="all">All</li>
                                    @foreach($categories as $category)    <!-- ========== category display with item ==========-->
                                        <li class="filter" data-filter="#{{ $category->slug }}">{{ $category->name }} <span class="badge">{{ $category->items->count() }}</span></li>
                                    @endforeach
                                </ul><!-- filter-list -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <ul id="menu-pricing" class="menu-price">

                        @foreach($items as $item)    <!-- ========== items display ==========--> 
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
                                <h2 class="white">DA{{ $item->price }}</h2>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>

    </div>
</section>



<!--==  Reserve A Table! ==-->
<section id="reserve" class="reserve">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row dis-table" style="width : 110%;">
                <div class="col-xs-6 col-sm-6 dis-table-cell color-bg" style="width : 50%;">
                    <h2 class="section-title" style="padding-left : 20px;">Reserve A Table !</h2>
                </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                </div>
            </div> <!-- dis-table -->
        </div> <!--row -->
    </div> <!--wrapper -->
</section> <!-- reserve -->



<section class="reservation">
    <div class="wrapper">
        <div class="container-fluid">
            <div class=" section-content">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                    
                     <?php

                         $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
                         $last = $uriSegments[3];  


                     ?>
                        
                        
                        <form class="reservation-form" method="post" action="{{ route('reservation.reserve' , [ 'id' => $last ]) }}">
                            @csrf  <!-- ========== token ==========--> 
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    
                                        <input type="hidden" class="form-control reserve-form empty iconified" 
                                        name="name" id="name"
                                        value ="{{ Auth::user()->name }}">
                                    
                                    <div class="form-group">
                                        <input type="tel" class="form-control reserve-form empty 
                                        iconified" name="phone" required="required" id="phone"  placeholder="  &#xf095;  Phone">
                                    </div>
                                    
                                </div>

                                <div class="col-md-6 col-sm-6">
                                
                                    
                                    
                                        <input type="hidden" name="email" class="form-control reserve-form empty iconified" id="email" 
                                         value ="{{ Auth::user()->email }}" >
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control reserve-form empty iconified" 
                                        name="dateandtime" id="datetimepicker1" placeholder="&#xf017;  Time">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <textarea type="text" name="message" required="required"
                                    class="form-control reserve-form empty iconified" id="message" rows="3"  
                                    placeholder="  &#xf086;  We're listening"></textarea>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                        <span><i class="fa fa-check-circle-o"></i></span>
                                        RESERVE A TABLE 
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                                         <!-- ========== Service Hours ==========-->
                    <div class="col-md-2 hidden-sm hidden-xs"></div>

                    <div class="col-md-4 col-sm-6 col-xs-12"> 
                        <div class="opening-time">
                            <h3 class="opening-time-title">Service Hours</h3>
                            <p>Saturday to thursday : 11 AM - 12 PM</p>
                            <p>Friday: 6:00 PM - 12:00 PM</p>

                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
                                    



                                     <!-- ========== contact us  ==========-->



<section id="contact" class="contact">
    <div class="container-fluid color-bg">
        <div class="row dis-table">
            <div class="hidden-xs col-sm-6 dis-table-cell">
                <h2 class="section-title">Contact us</h2>
            </div>
            <div class="col-xs-6 col-sm-6 dis-table-cell">
                <div class="section-content">
                    <p>Esi sba Adresse : BP 73, Bureau de poste EL WIAM, 22016 Sidi Bel Abbés, Algérie </p>
                    <p>+213 48 74 94 50 </p>
                </div>
            </div>
        </div>
    </div>
</section>
                               <!-- ========== send a msg  ==========--> 

<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <div class="row">
                    <form class="contact-form" method="post" action="{{ route('contact.send' , ['id' => $last ]) }}">
                        @csrf
                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                            <div class="form-group">
                                <input  name="name" type="hidden" class="form-control" id="name" 
                                required="required" value =" {{ Auth::user()->name }} ">
                            </div>
                            <div class="form-group">
                                <input name="email" type="hidden" class="form-control" id="email" 
                                required="required" value =" {{ Auth::user()->email }}>
                            </div>
                            <div class="form-group">
                                <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Subject">
                            </div>
                            
                            <textarea name="message" type="text" class="form-control" id="message" 
                            rows="7" required="required" placeholder="  Message"></textarea>
                        </div>

                        

                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                            <div class="text-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-send">Send a msg </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>                          <!-- ========== our team ==========--> 
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="copyright text-center">
                    <p>
                        &copy;2019 <a href="#">Guid-ech team | Service restaurant</a> Developed by <a href="www.esi-sba.com">Guid-ech Team</a> Theme by <a href="b.klouche@esi-sba.dz"  target="_blank">mme.KLOUCHE Badia</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

                   <!-- ========== scripts ==========--> 

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
