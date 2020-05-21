$(function () {

	var $mapper = {};
	var _MAP = [];
	var _OPTIONS_MAP = {};
	var coord =
		[
			{
				"Latitude": -22.881029,
				"Longitude": -46.3727462
			},
			{
				"Latitude": -22.8822555,
				"Longitude": -46.3712084
			},
			{
				"Latitude": -22.9308406,
				"Longitude": -46.2790668
			},
			{
				"Latitude": -22.9333171,
				"Longitude": -46.2792135
			},
			{
				"Latitude": -22.963421,
				"Longitude": -46.1764719
			}
		];
	// var $iconGreen = 'http://maps.google.com/mapfiles/ms/icons/green-dot.png';
	// var $iconBlue = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';


	// var $iconGreen = 'http://localhost:8082/sintour-site/app/img/maps1.png';
	// var $iconBlue = 'http://localhost:8082/sintour-site/app/img/maps2.png';

	
	var $iconGreen = 'http://sintour.com.br/img/icon-restaurant.png';
	var $iconBlue = 'http://sintour.com.br/img/icon-hotel.png';

	var contentString1 = '<div id="content">' +
		'<div id="siteNotice">' +
		'</div>' +
		'<h1 id="firstHeading" class="firstHeading">Restaurante</h1>' +
		'<div id="bodyContent">' +
		'<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
		'sandstone rock formation in the southern part of the ' +
		'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) ' +
		'south west of the nearest large town, Alice Springs; 450&#160;km ' +
		'(280&#160;mi) by road. Kata Tjuta and Uluru are the two major ' +
		'features of the Uluru - Kata Tjuta National Park. Uluru is ' +
		'sacred to the Pitjantjatjara and Yankunytjatjara, the ' +
		'Aboriginal people of the area. It has many springs, waterholes, ' +
		'rock caves and ancient paintings. Uluru is listed as a World ' +
		'Heritage Site.</p>' +
		'<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
		'https://en.wikipedia.org/w/index.php?title=Uluru</a> ' +
		'(last visited June 22, 2009).</p>' +
		'</div>' +
		'</div>';

	var contentString = '';

	$(document).ready(function () {
		// $.get('views/card.html', function (data) {
		// 	contentString = data;
		// })
	})


	// $(window).load(function () {

	// 	//Load Parameters
	// 	$mapper = document.getElementById('map');
	// 	_OPTIONS_MAP = {
	// 		zoom: 12,
	// 		center: { lat: -22.9303466, lng: -46.2908793 },
	// 		mapTypeId: google.maps.MapTypeId.ROADMAP
	// 	};

	// 	initGoogleMap();
	// });

	function initGoogleMap() {
		_MAP = new google.maps.Map($mapper, _OPTIONS_MAP);

		loadInfoMaps(coord);
	}


	function loadInfoMaps(coord) {
		for (var i = 0; i < coord.length; i++) {

			if (i <= 1) {
				markerPointOnMap(coord[i].Latitude, coord[i].Longitude, 'Restaurant', $iconGreen);
			}
			else {
				markerPointOnMap(coord[i].Latitude, coord[i].Longitude, 'Restaurant', $iconBlue);
			}
		}
	}

	function markerPointOnMap(Lat, Long, title, icon) {
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(Lat, Long),
			map: _MAP,
			title: title
		});
		marker.setIcon(icon);

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});

		marker.addListener('click', function () {
			infowindow.open(_MAP, marker);
		});
	}

	function createwInfoWindow(data) {
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
	}

	return ContentMap = {
		initGoogleMap: initGoogleMap
	};
});

