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
		zoom:15,
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
	// google.maps.event.addListener(marker, 'click', function() {
		var infowindow = new google.maps.InfoWindow({
			content:"153 Aguirre Avenue, BF Homes, Paranaque City, Philippines"
		});
		infowindow.open(map,marker);
	// });
}