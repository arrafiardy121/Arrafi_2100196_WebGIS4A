
<div class="content"> 
 <div id="map" style="width: 100%; height: 800px; color:black;"></div> 
</div> 

<script>

var bataskel = new L.LayerGroup();
var lnbataskel = new L.LayerGroup();
var kepadatan = new L.LayerGroup();
var kasusdbd = new L.LayerGroup();
var lst = new L.LayerGroup();
var rawandbd = new L.LayerGroup();

var map = L.map('map', { 
 center: [-6.40, 106.79], 
 zoom: 12, 
 zoomControl: false,
 layers:[] 
}); 

var GoogleSatelliteHybrid= L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', { 
maxZoom: 22, 
attribution: 'Latihan Web GIS' 
}).addTo(map);

var Esri_NatGeoWorldMap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', {
attribution: 'Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme, NAVTEQ, UNEP-WCMC, USGS, NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC',
maxZoom: 16
});

var GoogleMaps = new L.TileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', { opacity: 1.0, 
attribution: 'Latihan Web GIS' 
});

var GoogleRoads = new L.TileLayer('https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}',{ 
opacity: 1.0, 
attribution: 'Latihan Web GIS' 
});

var baseLayers = { 
    'Google Satellite Hybrid': GoogleSatelliteHybrid, 
    'Esri_NatGeoWorldMap':Esri_NatGeoWorldMap,
    'GoogleMaps' : GoogleMaps,
    'GoogleRoads': GoogleRoads 
};

var groupedOverlays = {
"Parameter Tingkat Kerawanan DBD":{
'Jumlah Kasus DBD' :kasusdbd,
'Kepadatan Penduduk' : kepadatan,
'Suhu Permukaan Tanah (LST)':lst,
'[FINAL MAP] Sebaran Daerah Rawan DBD' :rawandbd},

"Peta Dasar":{
'Batas Administrasi' :bataskel,
'Batas Administrasi Garis' : lnbataskel}

};

L.control.groupedLayers(baseLayers, groupedOverlays).addTo(map);

var
osmUrl='https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';
var osmAttrib='Map data &copy; OpenStreetMap contributors';
var osm2 = new L.TileLayer(osmUrl, {minZoom: 0, maxZoom: 13, attribution: osmAttrib });
var rect1 = {color: "#ff1100", weight: 3};
var rect2 = {color: "#0000AA", weight: 1, opacity:0, fillOpacity:0};
var miniMap = new L.Control.MiniMap(osm2, {toggleDisplay: true, position : "bottomright",
aimingRectOptions : rect1, shadowRectOptions: rect2}).addTo(map);

L.Control.geocoder({position :"topleft", collapsed:false}).addTo(map);

/* GPS enabled geolocation control set to follow the user's location */
var locateControl = L.control.locate({
position: "topleft",
drawCircle: true,
follow: true,
setView: true,
keepCurrentZoomLevel: true,
markerStyle: {
weight: 1,
opacity: 0.8,
fillOpacity: 0.8
},
circleStyle: {
weight: 1,
clickable: false
},
icon: "fa fa-location-arrow",
metric: false,
strings: {
title: "My location",
popup: "You are within {distance} {unit} from this point",
outsideMapBoundsMsg: "You seem located outside the boundaries of the map"
},
locateOptions: {
maxZoom: 18,
watch: true,
enableHighAccuracy: true,
maximumAge: 10000,
timeout: 10000
}
}).addTo(map);

var zoom_bar = new L.Control.ZoomBar({position: 'topleft'}).addTo(map);

L.control.coordinates({

position:"bottomleft",
decimals:2,
decimalSeperator:",",
labelTemplateLat:"Latitude: {y}",
labelTemplateLng:"Longitude: {x}"
}).addTo(map);
/* scala */
L.control.scale({metric: true, position: "bottomleft"}).addTo(map);

var north = L.control({position: "bottomleft"});
north.onAdd = function(map) {
var div = L.DomUtil.create("div", "info legend");
div.innerHTML = '<img src="<?=base_url()?>assets/compassFIXED.png"style=width:200px;>';
return div; }
north.addTo(map);

$.getJSON("<?=base_url()?>/assets/Bataskel_ln.geojson",function(FID){ 
 L.geoJson( FID, { 
 style: function(feature){ 
 var color, 
 FID = feature.properties.FID; 
 if ( FID < 64 ) color = "#000000"; 
 else if ( FID < 0 ) color = "#f2051d"; 
 else color = "#f2051d"; // no data 
 return { color: "#999", weight: 1.5, color: color, fillOpacity: 1 }; 
 }, 
 onEachFeature: function( feature, layer ){ 
 layer.bindPopup(feature.properties.WADMKD) 
 } }).addTo(lnbataskel); 
});

$.getJSON("<?=base_url()?>/assets/KasusDBD.geojson",function(SkorDBD){
 L.geoJson(SkorDBD, {
 style: function(feature){
 var fillColor,
 SkorDBD = feature.properties.SkorDBD;
 if ( SkorDBD<2 ) fillColor = "#FFE7E2"; 
 else if (SkorDBD<3) fillColor="#FCA082"
 else if (SkorDBD<4) fillColor="#E32F27"
 else if (SkorDBD<5) fillColor="#8F000D"
 return { color: "#999", weight: 0, fillColor: fillColor, fillOpacity: 1 };
 },
 onEachFeature: function(feature, layer){
 layer.bindPopup(feature.properties.Nama_Kelur)
 }
 }).addTo(kasusdbd);
 });

$.getJSON("<?=base_url()?>/assets/LST.geojson",function(SkorLST){
 L.geoJson(SkorLST, {
 style: function(feature){
 var fillColor,
 SkorLST = feature.properties.SkorLST;
 if ( SkorLST<2 ) fillColor = "#38C200"; 
 else if (SkorLST<3) fillColor="#FFFF00"
 else if (SkorLST<4) fillColor="#FFAA00"
 else if (SkorLST<5) fillColor="#FF0000"
 return { color: "#999", weight: 0, fillColor: fillColor, fillOpacity: 1};
 },
 onEachFeature: function(feature, layer){
 layer.bindPopup(feature.properties.KetLST)
 }
 }).addTo(lst);
 });

 $.getJSON("<?=base_url()?>/assets/Kpdtns.geojson",function(Kepadatan_){
 L.geoJson(Kepadatan_, {
 style: function(feature){
 var fillColor,
 Kepadatan_ = feature.properties.Kepadatan_;
 if ( Kepadatan_<5200 ) fillColor = "#FFEBAF"; 
 else if (Kepadatan_<8000) fillColor="#FFC588"
 else if (Kepadatan_<14000) fillColor="#D67631"
 else if (Kepadatan_<23000) fillColor="#784C02"
 return { color: "#999", weight: 0, fillColor: fillColor, fillOpacity: 1};
 },
 onEachFeature: function(feature, layer){
 layer.bindPopup(feature.properties.Kode_Kelur)
 }
 }).addTo(kepadatan);
 });

$.getJSON("<?=base_url()?>/assets/DBDFinal.geojson",function(TotalSkor){
 L.geoJson(TotalSkor, {
 style: function(feature){
 var fillColor,
 TotalSkor = feature.properties.TotalSkor;
 if ( TotalSkor<2 ) fillColor = "#FFE7E2"; 
 else if (TotalSkor<7) fillColor="#FCA082"
 else if (TotalSkor<9) fillColor="#E32F27"
 else if (TotalSkor<11) fillColor="#8F000D"
 return { color: "#999", weight: 0, fillColor: fillColor, fillOpacity: 1 };
 },
 onEachFeature: function(feature, layer){
 layer.bindPopup(feature.properties.KetDBD)
 }
 }).addTo(rawandbd);
 });

</script> 