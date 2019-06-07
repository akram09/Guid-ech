<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title> Guidech rOute</title>
     <link rel="shortcut icon"  href="{{ asset('/images/G.ico') }}">
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('affichageDisplay/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('affichageDisplay/css/mdb.min.css') }}" rel="stylesheet">
  <!-- our custom styles (optional) ila bghitou tmodifiw -->
  <link href="{{ asset('affichageDisplay/css/style.min.css') }}" rel="stylesheet">
    <style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:0; bottom:0; width:100%; }
         .marker {
        border: none;
        cursor: pointer;
        height: 56px;
        width: 56px;
        background-image: url(/images/marker.png);
        background-color: rgba(0, 0, 0, 0);
      }
      ::-webkit-scrollbar {
        width: 3px;
        height: 3px;
        border-left: 0;
        background: rgba(0, 0, 0, 0.1);
      }

      ::-webkit-scrollbar-track {
        background: none;
      }

      ::-webkit-scrollbar-thumb {
        background: #00853e;
        border-radius: 0;
      }
        /* Marker tweaks */
      .mapboxgl-popup {           /*store popup*/
        padding-bottom: 50px;
      }

      .mapboxgl-popup-close-button {
        display: none;
      }

      .mapboxgl-popup-content {
        font: 400 15px/22px 'roboto', 'roboto', Sans-serif;
        padding: 0;
        width: 180px;
      }

      .mapboxgl-popup-content-wrapper {
        padding: 1%;
      }

      .mapboxgl-popup-content h3 {
        background: #0984e3;
        color: #fff;
        margin: 0;
        display: block;
        padding: 10px;
        border-radius: 3px 3px 0 0;
        font-weight: 222;
        margin-top: -15px;
      }

      .mapboxgl-popup-content h4 {
        margin: 0;
        display: block;
        padding: 10px;
        font-weight: 300;
      }

      .mapboxgl-popup-content div {
        padding: 10px;
      }

      .mapboxgl-container .leaflet-marker-icon {
        cursor: pointer;
      }

      .mapboxgl-popup-anchor-top > .mapboxgl-popup-content {
        margin-top: 15px;
      }

      .mapboxgl-popup-anchor-top > .mapboxgl-popup-tip {
        border-bottom-color: #91c949;
      }
       .view {
      height: 100%;
    }
     .head 
        {
          top:4;
          right: 5%;
          width:175;
          height: 40;
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
     <style>
 #menu {
         position: absolute;
         background-color: rgba(0, 0, 0, 0.1);
         padding: 5px;
           }
   </style>

<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.0/mapbox-gl-directions.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.0/mapbox-gl-directions.css' type='text/css' />
<div id='map'></div>
   <div id='menu'>
       <div class='heading'>
        <img src="{{ asset('/images/GRIS.png') }}" class="head" alt="..."> 
      </div>
<input id='streets-v11' type='radio' name='rtoggle' value='streets' checked='checked'>
<label for='streets'>streets</label>
<input id='light-v10' type='radio' name='rtoggle' value='light'>
<label for='light'>light</label>
<input id='dark-v10' type='radio' name='rtoggle' value='dark'>
<label for='dark'>dark</label>
<input id='outdoors-v11' type='radio' name='rtoggle' value='outdoors'>
<label for='outdoors'>outdoors</label>
<input id='satellite-v9' type='radio' name='rtoggle' value='satellite'>
<label for='satellite'>satellite</label>
</div>

<script>
mapboxgl.accessToken = 'pk.eyJ1Ijoid2FoaWRtZG4iLCJhIjoiY2p0cnJ4MjczMG16bjN5bXJldWtwcGdrcCJ9.oYj-uNz_AUap9CfyskCupw';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v9',
   center: [-1.316699, 34.881789 ],
    zoom: 13
});

      // Change the map style.
   var layerList = document.getElementById('menu');
   var inputs = layerList.getElementsByTagName('input');
 
        function switchLayer(layer) {
            var layerId = layer.target.id;
            map.setStyle('mapbox://styles/mapbox/' + layerId);
                                     }
 
               for (var i = 0; i < inputs.length; i++) {
                    inputs[i].onclick = switchLayer;
                                        }
       // Add geolocate control to the map.
map.addControl(new mapboxgl.GeolocateControl({
positionOptions: {
enableHighAccuracy: true
},
trackUserLocation: true
}));
           // View full screen Map
          map.addControl(new mapboxgl.FullscreenControl());
          // Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.NavigationControl());


map.addControl(new MapboxDirections({
    accessToken: mapboxgl.accessToken
}), 'top-right');

   // stores data geojson
    var stores = {
    type: 'FeatureCollection',
    features: [
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [
            -1.3187992572784424,34.883097040065955
          ]
        },
        properties: {
          phoneFormatted: '(213) 699338684 ',
          address: 'bab wahran',
          city: 'Tlemcen',
          name: 'le cinq',
          url: 'http://www.esi-sba.dz'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [
              -1.324625,
             34.874964
          ]
        },
        properties: {
          phoneFormatted: '(202) 507-8357',
          address: 'Moussa kazi, Boulevard Aïn Sbaa Ali',
          city: 'Tlemcen',
          name: 'l`equinoxe',
          url: 'http://www.esi-sba.dz',
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [
             -1.333766,
            34.880703
          ]
        },
        properties: {
          phoneFormatted: '(202) 555555555',
          address: 'L`échappatoire, Boulevard Imama, 13000 Mansourah,',
          city: 'Tlemcen',
          url: 'http://www.esi-sba.dz',
          name:'lechapatoire',
         }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [
            -1.342928,
            34.879277
          ]
        },
        properties: {
          phoneFormatted: '(202) 337-9338',
          address: ' Cafe SLIMANI, Boulevard Imama, 13000 Mansourah,',
          city: 'Tlemcen',
          url: 'http://www.esi-sba.dz',
          name:'Restaurant Marocain',
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [
            -1.322141,
            34.886022
          ]
        },
        properties: {
          phoneFormatted: '(202) 547-9338',
          address: ' Le Gourmet, Rue Mohamed Abdellaoui, 13000 Tlemcen',
          city: 'Tlemcen',
          name:'Le Gourmet',
          url: 'http://www.esi-sba.dz',
         }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [
            -1.32746,
            34.90057
          ]
        },
        properties: {
          phoneFormatted: '(202) 547-9338',
          address: ' Naftal, RN 22, 13000 Tlemcen, RADP',
          city: 'Tlemcen',
          name:'La marina',
          url: 'http://www.esi-sba.dz',

          
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [
           -1.3275,
            34.886459
          ]
        },
        properties: {
          phoneFormatted: '(301) 654-7336',
          
          address: '  Boulevard Aïn Sbaa Ali, 13000 Tlemcen, RADP',
           city: 'Tlemcen',
          name:'Best Chiken',
          url: 'http://www.esi-sba.dz',

        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [
             -1.339576,
             34.887829
          ]
        },
        properties: {
          phoneFormatted: '(571) 203-0082',
          address: 'Mairie Annexe, Boulevard du 18 Fevrier, 13000 Mansourah, RADP',
          city: 'Tlemcen',
          name:'Maxi FastFood',
          url: 'http://www.esi-sba.dz',
}
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [
           -1.324153,
            34.886776
          ]
        },
        properties: {
          phoneFormatted: '(703) 522-2016',
          address: 'Rue Mohamed Abdellaoui, 13000 Tlemcen, RADP',
          city: 'Tlemcen',
          name:'Le coq13',
          url: 'http://www.esi-sba.dz',
 }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [
            -1.303725,
            34.881926
          ]
        },
        properties: {
          phoneFormatted: '(610) 642-9400',
          address: '  RN 2;RN 22, 130000 Tlemcen, RADP',
          city: 'Tlemcen',
          name:'Restaurant Agadir',
          url: 'http://www.esi-sba.dz',
} 
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [
            -1.319121,
           34.863944
          ]
        },
        properties: {
          phoneFormatted: '(215) 386-1365',
          address: ' 130000 Tlemcen, RADP',
          city: 'Tlemcen',
          name:'Kraouti',
          url: 'http://www.esi-sba.dz',
} 
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [
            -1.318172,
            34.864179
          ]
        },
        properties: {
          phoneFormatted: '(202) 331-3355',
          address: ' 130000 Tlemcen, RADP',
          city: 'Tlemcen',
          name:'Bekhchi',
          url: 'http://www.esi-sba.dz',
        }
      },
         {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [
            -1.32030,
           34.88890
          ]
        },
        properties: {
          phoneFormatted: '(215) 2222222',
          address: ' test test',
          city: 'Tlemcen',
          name:'test',
          url: 'http://www.esi-sba.dz',
} 
      }
      ]
  };
  // This adds the data to the map
  map.on('load', function (e) {
    // This is where your '.addLayer()' used to be, instead add only the source without styling a layer


    map.addSource('single-point', {
      "type": "geojson",
      "data": {
        "type": "FeatureCollection",
        "features": [] // Notice that initially there are no features
      }
    });
  
  map.addControl(geocoder, 'top-left');
  });

  // This is where your interactions with the symbol layer used to be
  // Now you have interactions with DOM markers instead
  stores.features.forEach(function(marker, i) {
    // Create an img element for the marker
    var el = document.createElement('div');
    el.id = "marker-" + i;
    el.className = 'marker';
    // Add markers to the map at all points
    new mapboxgl.Marker(el, {offset: [0, -23]})
        .setLngLat(marker.geometry.coordinates)
        .addTo(map);

    el.addEventListener('click', function(e){
        // 1. Fly to the point
        flyToStore(marker);

        // 2. Close all other popups and display popup for clicked store
        createPopUp(marker);

        // 3. Highlight listing in sidebar (and remove highlight for all other listings)
        var activeItem = document.getElementsByClassName('active');

        e.stopPropagation();
        if (activeItem[0]) {
           activeItem[0].classList.remove('active');
        }

        var listing = document.getElementById('listing-' + i);
        listing.classList.add('active');

    });
  });


  function flyToStore(currentFeature) {
    map.flyTo({
        center: currentFeature.geometry.coordinates,
        zoom: 15
      });
  }

  function createPopUp(currentFeature) {
    var popUps = document.getElementsByClassName('mapboxgl-popup');
    if (popUps[0]) popUps[0].remove();


    var popup = new mapboxgl.Popup({closeOnClick: false})
          .setLngLat(currentFeature.geometry.coordinates)
          .setHTML('<h3 onclick="location.href=\''+currentFeature.properties.url+'\';">'+currentFeature.properties.name+'</h3>' +
            '<h4>Address: ' +currentFeature.properties.address + '</h4>')
          .addTo(map);
  }

</script>
  <script type="text/javascript" src="{{ asset('affichageDisplay/js/jquery-3.3.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('affichageDisplay/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('affichageDisplay/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
</body>
</html>