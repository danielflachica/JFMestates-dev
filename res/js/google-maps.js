////////////////////////////////////////////////////
// Google Maps API  							 //
// key = AIzaSyAZW6FD7qMaMzol6g3ESy2RtmyRgnXS9Ws //
///////////////////////////////////////////////////


function homeMap() {
	// Set map center
	// var mapCenter = new google.maps.LatLng(14.449455,121.0166093); 	//153 Aguirre, BF Homes Paranaque (Latitude, Longitude)
	var mapCenter = new google.maps.LatLng(14.449455,121.018798); 	//153 Aguirre, BF Homes Paranaque (Latitude, Longitude)

	// Initialize Map Properties
	var mapProp = {
		center: mapCenter,
		zoom:12,
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	// Display map inside target div
	var container = document.getElementById("googleMap");
	var map = new google.maps.Map(container, mapProp);

	// Add a map marker overlay
	var marker = new google.maps.Marker({
		position:mapCenter,
		animation:google.maps.Animation.DROP
	});
	marker.setMap(map);

	// Add info window to marker
	// var infowindow = new google.maps.InfoWindow({
	// 	content:"Click to zoom"
	// });
	// infowindow.open(map,marker);

	// Zoom to 17 when clicking on marker, then pan back after 15 seconds
	google.maps.event.addListener(marker, 'click', function() {
		var pos = map.getZoom();
		map.setZoom(17);
		map.setCenter(marker.getPosition());
		window.setTimeout(function() {map.setZoom(pos);},15000);
	});
}