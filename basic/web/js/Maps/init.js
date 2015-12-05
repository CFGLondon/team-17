var mapBox;
var defaltLATLNG;
var infoWindow;
var MapOptions;
var map;
init();

function init() {
	mapBox = document.getElementById('map-here');
	defaltLATLNG = new google.maps.LatLng(51.5072, 0.1275);

	infoWindow = new google.maps.InfoWindow({
	    content: ""
	});

	MapOptions = {
	    center: defaltLATLNG,
	    zoom: 7
	};

	map = new google.maps.Map(mapBox, MapOptions);	
}