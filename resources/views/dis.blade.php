<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title> Guidech rOute</title>
     <link rel="shortcut icon"  href="{{ asset('/images/G.ico') }}">
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet' />
    <style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:0; bottom:0; width:100%; }
    </style>
</head>
<body>
     <style>



     #menu {
         position: absolute;
         background: #fff;
         padding: 10px;
         font-family: 'Open Sans', sans-serif;
           }
   </style>

<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.0/mapbox-gl-directions.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.0/mapbox-gl-directions.css' type='text/css' />
<div id='map'></div>
   <div id='menu'>
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
</script>

</body>
</html>