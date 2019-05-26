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

<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.0/mapbox-gl-directions.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.0/mapbox-gl-directions.css' type='text/css' />
<div id='map'></div>

<script>
mapboxgl.accessToken = 'pk.eyJ1Ijoid2FoaWRtZG4iLCJhIjoiY2p0cnJ4MjczMG16bjN5bXJldWtwcGdrcCJ9.oYj-uNz_AUap9CfyskCupw';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v9',
   center: [-1.316699, 34.881789 ],
    zoom: 13
});

map.addControl(new MapboxDirections({
    accessToken: mapboxgl.accessToken
}), 'top-right');
</script>

</body>
</html>