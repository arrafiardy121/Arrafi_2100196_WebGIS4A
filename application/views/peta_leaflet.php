<div class="content"> 
 <div id="map" style="width: 100%; height: 660px; color:black;"></div> 
</div> 
<script> 
var map = L.map('map', { 
 center: [-1.7912604466772375, 116.42311966554416], 
 zoom: 5, 
 zoomControl: false,
 layers:[] 
}); 

var GoogleSatelliteHybrid= L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', { 
maxZoom: 22, 
attribution: 'Latihan Web GIS' 
}).addTo(map);

var baseLayers = {'Google Satellite Hybrid': GoogleSatelliteHybrid}; 
var overlayLayers = {} 
L.control.layers(baseLayers, overlayLayers, {collapsed: true}).addTo(map);

var 
osmUrl='https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z} /{y}/{x}'; 
var osmAttrib='Map data &copy; OpenStreetMap contributors'; 
var osm2 = new L.TileLayer(osmUrl, {minZoom: 0, maxZoom: 13, attribution: osmAttrib }); 
var rect1 = {color: "#ff1100", weight: 3}; 
var rect2 = {color: "#0000AA", weight: 1, opacity:0, fillOpacity:0}; 
var miniMap = new L.Control.MiniMap(osm2, {toggleDisplay: true, position : "bottomright", 
aimingRectOptions : rect1, shadowRectOptions: rect2}).addTo(map);

L.Control.geocoder({position :"topleft", collapsed:true}).addTo(map);

</script>
