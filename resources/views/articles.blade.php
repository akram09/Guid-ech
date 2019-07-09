<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Guid-ech |Conseils et articles</title>
    <link rel="shortcut icon"  href="{{ asset('/images/G.ico') }}">

 <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('affichageDisplay/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('affichageDisplay/css/mdb.min.css') }}" rel="stylesheet">
  <!-- our custom styles (optional) ila bghitou tmodifiw -->
  <link href="{{ asset('affichageDisplay/css/style.min.css') }}" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/bootstrap.min.js"></script>
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
	<style >
		.debut{               /* desing d page font avec background boutique */
         margin: 0;    
         padding: 0;
         font-family: 'Comic sans MS';
         background: url("/images/alger.jpg"); 
         background-position:center;
         background-size:cover;
        }
        body{
        	background-color: black;
        }
        .paragraphe{
        	text-align: center;
        	font-size: 200%;
         font-family: 'Comic sans MS';
         background-color: white;

        }
        .sug{
        	font-size: 150%;
        	font-family: 'Comic sans MS';
        	text-align: center;
        	color: white;
        }
        li{
        text-align: center;
        	font-size: 100%;
         font-family: 'Comic sans MS';
         background-color: white;


        }

.slideshow{
border:5px solid white;
box-shadow:0 0 5px hsla(0,0%,0%,.5);
overflow:hidden;
max-width:600px;
margin:10px auto;
position:relative}

.slideshow ul{
height:392px;
margin:0;
position:relative}


.slideshow li{
width:100%;
top:0;
left:0;
animation:slideshow 25s ease infinite;
-webkit-animation:slideshow 25s ease infinite;
position:absolute;
opacity:0;
list-style:none}

.slideshow li img{height:auto;max-width:100%}



.slideshow li:nth-child(2){animation-delay:5s;-webkit-animation-delay:5s}
.slideshow li:nth-child(3){animation-delay:10s;-webkit-animation-delay:10s}
.slideshow li:nth-child(4){animation-delay:15s;-webkit-animation-delay:15s}
.slideshow li:nth-child(5){animation-delay:20s;-webkit-animation-delay:20s}

@keyframes slideshow{0%{opacity:0}10%{opacity:1}20%{opacity:1}25%{opacity:0}100%{opacity:0}} 
@-webkit-keyframes slideshow{0%{opacity:0}10%{opacity:1}20%{opacity:1}25%{opacity:0}100%{opacity:0}} 

.description_slideshow{
background:rgba(0,0,0,0.7);
width:100%;
height:48px;
text-align:center;
position:absolute;
bottom:0;
left:0}

.description_slideshow span{
color:white;
display:block;
font-size:1rem;
line-height:48px}

/*****barre progression *****/
.barre_progression{ 
position:absolute;
bottom:48px;
width:100%; 
height:5px;
background:white;
animation:barre_progression 25s ease-out infinite;
-webkit-animation:barre_progression 25s ease-out infinite}

/*****animation barre progression *****/ 
@keyframes barre_progression{
0%,20%,40%,60%,80%,100%{width:0%;opacity:0}
4%,24%,44%,64%,84%{width:0%;opacity:.3}
16%,36%,56%,76%,96%{width:100%;opacity:.7}
17%,37%,57%,77%,97%{width:100%;opacity:.3}
18%,38%,58%,78%,98%{width:100%;opacity:0}}

@-webkit-keyframes barre_progression{
0%,20%,40%,60%,80%,100%{width:0%;opacity:0}
4%,24%,44%,64%,84%{width:0%;opacity:.3}
16%,36%,56%,76%,96%{width:100%;opacity:.7}
17%,37%,57%,77%,97%{width:100%;opacity:.3}
18%,38%,58%,78%,98%{width:100%;opacity:0}} 


@media screen and (max-width:41.6rem){

.slideshow,
.slideshow ul li,
.description_slideshow{

width:100%

}

.slideshow ul{

height:auto

}

.description_slideshow span{

font-size:1rem
} 


 

	</style>
</head>
<body>

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
                  <button class="btn btn-outline-primary btn-rounded waves-effect btn-sm" data-toggle="modal" data-target="#elegantModalForm" ><i class="fas fa-search"></i></button>
               </form>

   <ul class="navbar-nav nav-flex-icons">




          <li class="nav-item"> <!-- login & register -->
            <a href="" data-toggle="modal" data-target="#elegantModalForm1" class="nav-link" ><i class="fas fa-user-plus"></i>@lang('welcome.register_nav')</a>

          </li>
          <li class="nav-item">
           <a href="" data-toggle="modal" data-target="#elegantModalForm" class="nav-link"   ><i class="fas fa-sign-in-alt"></i>@lang('welcome.login_nav')</a>

          </li>

           <li class="nav-item">
            <a class="nav-link" target="_blank">@lang('welcome.visit_nav')<i class="fas fa-eye"></i>{{ count($views = ConsoleTVs\Links\Models\View::all()) }}</a> <!-- visitor counter for welcome.blade.php i can change it to get all hits for every page on the entire site-->
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
	<div class="debut">
<br><br><br><br><br><br><br>
<h2><center>ALGERIE</center></h2>
<br><br><br><br><br><br><br><br><br>
</div>
<div class="paragraphe">
<p>Giud-ech vous propose des conseils et des articles pour mieux gérer vos vacances! Checkez les... </p>
</div>

<div class="sug">
<a href="#deux"> Shopping et artisanat, que ramener ?</a><br>
<a href="#un"> 3 raisons pour visiter l'algérie ?</a><br>
<a href="#quatre"> Quels sont les activités à faire en Algérie ?</a><br>
<a href="#cinq">Comment voyager en Algérie moins chèr ? </a><br>
<a href="#trois"> Que voir et que visiter en Algérie ?</a><br>
</div>
<br><br><br>

<div class="liste">
<ol>
	
		<li id="deux"><h3> Shopping et artisanat, que ramener ?</h3>
		<p>A rapporter du pays : les bijoux en argent, les colifichets en cuir ou en cuivre, les poteries, les tapis,couvertures, babouches, les vanneries, les broderies, les épices. Pour une découverte du sud du pays, un chèche comme article de souvenirs s’impose.</p>
	<div class="slideshow">
<ul>
<li><img src="/images/fakhar.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
<li><img src="/images/kb2.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
<li><img src="/images/222.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
<li><img src="/images/102.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
<li><img src="/images/734.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
</ul>
<div class="barre_progression"></div>
</li>
<br><br><br><br>
		<li id="un"><h3 >3 raisons pour visiter l'algérie ?</h3>
	<h4>	Un climat très doux et tempéré </h4> 
<p>La mer Méditerranée joue un grand rôle dans le schéma climatique du pays surtout au nord. Parfois comparé à la Californie à cause des conditions climatiques, le Nord algérien est chaud et sec en été, tandis qu’en hiver il est doux et humide. Tout ceci au grand bonheur des voyageurs et des touristes surtout européens. Vous pourrez vous balader en toute tranquillité dans les rues d’Alger et même en bordure de mer d’Annaba, tous traversés par un vent venant du Sahara.</p>
<h4> En Algérie, tout le monde aime le Rai.</h4><p> Il s’agit d’un genre musical dont l’origine remonte à l’Algérie du début du XXe siècle. Le pays s’est forgé une grande réputation à travers le monde comme étant le berceau de ce style musical berbère.

Le mélange culturel est impressionnant en Algérie. Le Nord est dominé par les cultures arabes et berbères. Le Sud lui est composé en majorité par les Sahraouis et les Touareg. Ce pays cosmopolite d’Afrique dispose d’une des plus belles diversités culturelles du monde.</p>
<h4>
L’architecture et la découverte des vestiges préhistoriques</h4><p>
Le principal signe distinctif de l’architecture algérienne est la position géographique du pays. Vous pourrez visiter les différents bâtiments de la colonisation française avant de passer aux vestiges des civilisations phéniciennes, romaines, espagnoles, vandales, arabes, turcs, byzantins… En plus de cela, vous pourrez découvrir de nombreux sites archéologiques.</p>
<div class="slideshow">
<ul>
<li><img src="/images/drp.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
<li><img src="/images/dz.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
<li><img src="/images/dz2.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
<li><img src="/images/sah.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
<li><img src="/images/wlp.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
</ul>
<div class="barre_progression"></div>
</li><br><br><br><br>


		<li id="quatre"><h3>Quels sont les activités à faire en Algérie ?</h3>
		<p>L’Algérie, c’est plus de 1000 km de plages propices aux activités balnéaires. Après les activités de plage, la baignade, les randonnées, l’escalade, et autres activités en plein air, la pratique des jeux de société – cartes, dames, échec – est aussi au rendez-vous du fait qu’elles font partie intégrante de la culture populaire. Une visite de la Vallée du M'Zab s’impose également pour une découverte des villages fortifiés des Ksours, après une escapade nature dans le site d’Assekerm. Enfin, d’innombrables musées racontent l’histoire et l’art du pays, notamment au Musée National des Beaux-Arts ainsi que le Musée National des Arts et Traditions populaires.</p>

       <div class="slideshow">
     <ul>
      <li><img src="/images/desert.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
     <li><img src="/images/sah.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
      <li><img src="/images/musé.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
     <li><img src="/images/ski.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
     <li><img src="/images/mng.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
    </ul>
<div class="barre_progression"></div>
	</li><br><br><br><br>
		<li id="cinq"><h3>Comment voyager en Algérie moins chèr ?</h3>
		<h4>PRENEZ LES TRANSPORTS EN COMMUN</h4>
		<p>
         Dans l'Algérie bien sur se trouvent des transports en commun, bien moins chers que les taxis. Renseignez-vous avant le départ, Internet est une mine d’or pour qui sait chercher. Vous découvrirez les lignes à prendre, les différents moyens de transports urbains à votre disposition et les tarifs. Parfois, il est même possible d’acheter des billets en direct. Si toutefois le taxi reste la seule option, n’hésitez pas à discuter le prix.</p>
         <h4>MARCHANDEZ</h4>
         <p>Dans les marchés, ou aux abords des grands sites touristiques, il y a toujours des marchands qui viendront marchander les prix. Jouez le jeu. La plupart du temps, ils n’hésitent pas à « faire une fleur » en proposant un prix doublé. Si vous vous écartez, ils reviendront à la charge avec un prix revu à la baisse. Il s’agit là d’un coup de poker à tenter. Si vous êtes joueur, vous avez toutes vos chances. Attention toutefois, dans certains pays il est très mal venu de marchander, surtout si le prix indiqué est plus qu’abordable</p>
         <h4>SE FIXER UN BUDGET QUOTIDIEN</h4>
         <p>Avant de partir, faites un prévisionnel. Il s’agit de répartir la somme globale attitrée à votre séjour, sur le nombre de jours sur place. Ainsi, vous pourrez faire en sorte de mieux maîtriser votre budget. Oubliez que vous avez une CB, cela vous épargnera les frais suite aux retraits sur place. Recherchez avant de partir, s’il existe des activités gratuites, des sorties peu chères etc. En fonctionnant de la s</p>
		 <div class="slideshow">
     <ul>
      <li><img src="/images/budget.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
     <li><img src="/images/voyag.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
      <li><img src="/images/citation.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
     <li><img src="/images/loll.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
     <li><img src="/images/nnn.jpg" alt><span class="description_slideshow"><span>Guid-ech</span></span></li>
    </ul>
<div class="barre_progression"></div>
	</li>	
		<li id="trois"><h3> Que voir et que visiter en Algérie ?</h3>
		<p>Guid-ech est fait exactement pour ça ! n'hésiter pas à consulter chaque willaya et découvrez la magie de ce pays... </p></li>
	</ol>
</div>

</div>
<br><br><br><br>
    
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
