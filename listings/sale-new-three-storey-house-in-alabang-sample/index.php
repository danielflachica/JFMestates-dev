<!DOCTYPE html>
<html lang="en">
<head>
	<title>JFM Estates | Listings</title>
	<?php require_once '../../res/templates/bootstrap-legal.php'; ?>
	<?php require_once '../../res/templates/google-fonts.php'; ?>
	<style type="text/css">
		.listing-img {
			width: 100%;
			height: 100%;
		}
				/* The heart of the matter */
		.slider-img-group > .row {
		  overflow-x: auto;
		  white-space: nowrap;
		}
		.slider-img-group > .row > .col-sm-4 {
		  display: inline-block;
		  float: none;
		  height: 170px;
		  width: 150px;
		}
		.slider-img-group > .row > .col-sm-4 > img, video {
			opacity: 0.6;
			/*height: 120px !important;
			width: 190px !important*/
		}
		.slider-img-group > .row > .col-sm-4 > img:hover, video:hover {
			opacity: 1;
		}
		.slider-img-group > .row > .col-sm-4:first-child {
		  padding-left:0px !important;
		  /*background: green;*/
		}
		.slider-img-group > .row > .col-sm-4:last-child {
		  padding-right:0px !important;
		  /*background: red;*/
		}

		 @media screen and (min-width: 781px) and (max-width: 840px) {
				.carousel-inner img{
				  height: 30px !important;
				}
				.carousel-inner video{
				  height: 30px !important;
				}
		}
	</style>

	<?php session_start(); $_SESSION['active_page'] = 'properties'; ?>
</head>

<body>
	<?php require '../../res/templates/nav-legal.php'; ?>

	<?php include '../../modals/image-1.php';?>

	<div class="container mb-4">
		<a class="btn btn-sm btn-secondary px-3 mb-3" href="/jfmestates-dev/listings">
			<small><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-left"></i></small>&nbsp;
			Back to Listings
		</a>
		<h1><span class="text-info font-weight-bold">FOR SALE:</span> New Three-Storey House in Alabang [Sample]</h1>
		<!-- <hr><br> -->
		<!-- <div class="row mt-5">
			
		</div> -->
	</div>
	
	<!-- Carousel -->
	<div class="container-fluid mt-4" style="background: #263238";>
		<div class="container">
			<div class="row px-3">
				<div class="col-md-1">
					<a class="carousel-control-prev w-100" style="background-color: rgba(0,0,0,1);" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
				</div>
				<div class="col-md-10 px-0">
					<div id="carouselExampleControls" class="carousel slide" data-interval="false">
						<!-- Indicators -->
						<!-- <ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide="2"></li>
							<li data-target="#carouselExampleIndicators" data-slide="3"></li>
						</ol> -->
						<!-- <ul class="carousel-indicators">
							<li data-target="#carouselExampleControls" data-slide-to="0" style="cursor: pointer" class="active"></li>
							<li data-target="#carouselExampleControls" data-slide-to="1" style="cursor: pointer"></li>
							<li data-target="#carouselExampleControls" data-slide-to="2" style="cursor: pointer"></li>
							<li data-target="#carouselExampleControls" data-slide-to="3" style="cursor: pointer"></li>
						</ul> -->


						<!-- Images -->
						<div class="carousel-inner" style="cursor: pointer" role="listbox">
							<div class="carousel-item active" data-slide-number="0">
								<img class="d-block img-fluid"  style="width: 100%;height:520px" src="../../res/img/h1.jpg" alt="First slide" data-toggle="modal" data-target="#image-1">
							</div>
							<div class="carousel-item" data-slide-number="1">
								<img class="d-block img-fluid"  style="width: 100%;height:520px" src="../../res/img/h2.jpg" alt="Second slide">
							</div>
							<div class="carousel-item" data-slide-number="2">
								<img class="d-block img-fluid"  style="width: 100%;height:520px" src="../../res/img/h3.jpg" alt="Third slide">
							</div>
							<div class="carousel-item" data-slide-number="3">
								<video class="d-block" style="/*width: 100%;*/height:520px" controls>
									<source src="../../res/vids/Avengers.mp4" type="video/mp4">
								</video>
							</div>
						</div>

						<div class="container slider-img-group" style="background-color: #121212">
						    <div class="row text-center flex-nowrap text-light">
						        <div data-target="#carouselExampleControls" data-slide-to="0" style="cursor: pointer" class="col-sm-4 px-1 mt-3 mb-0 active">
						        	<img src="../../res/img/h1.jpg" style="width: 100%; height: 100%">
						        </div>
						        <div data-target="#carouselExampleControls" data-slide-to="1" style="cursor: pointer" class="col-sm-4 px-1 mt-3 mb-0">
						        	<img src="../../res/img/h2.jpg" style="width: 100%; height: 100%">
						        </div>
						        <div data-target="#carouselExampleControls" data-slide-to="2" style="cursor: pointer" class="col-sm-4 px-1 mt-3 mb-0">
						        	<img src="../../res/img/h3.jpg" style="width: 100%; height: 100%">
						        </div>
						        <div data-target="#carouselExampleControls" data-slide-to="3" style="cursor: pointer" class="col-sm-4 px-1 mt-">
							        <video style="width: 100%; height: 100%">
										<source src="../../res/vids/Avengers.mp4" type="video/mp4">
									</video>
						        </div>
						    </div>
						</div>
					</div>
				</div>
				<div class="col-md-1">
					<a class="carousel-control-next w-100" style="background-color: rgba(0,0,0,1);" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Property Details -->
	<div style="height: 400px;"></div>

	<!-- Location Map -->
	<span class="badge badge-secondary p-2 pt-3 mb-0" style="width: 100%; border-radius: 0">
		<h6><i class="fa fa-map-marker"></i> &nbsp; 509 Anonas Street, Ayala Alabang Village, Muntinlupa City, 1780</h6>
	</span>
	<div id="googleMap" class="col-md-12 bg-light mt-0" style="height:500px"></div>
	
	<?php include '../../res/templates/footer-legal.php'; ?>

	<!-- JavaScript -->
	<script type="text/JavaScript">
		function propertyLocMap() {
			// Set map center\
			var mapCenter = new google.maps.LatLng(14.406482,121.025722); 	//509 Anonas St, AAV (Latitude, Longitude)

			// Initialize Map Properties
			var mapProp = {
				center: mapCenter,
				zoom:17,
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
			// Zoom to 17 when clicking on marker, then pan back after 15 seconds
			google.maps.event.addListener(marker, 'click', function() {
				// var pos = map.getZoom();
				// map.setZoom(17);
				// map.setCenter(marker.getPosition());
				// window.setTimeout(function() {map.setZoom(pos);},15000);
				var infowindow = new google.maps.InfoWindow({
					content:"509 Anonas Street, Ayala Alabang Village, Muntinlupa City, 1780"
				});
				infowindow.open(map,marker);
				});
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZW6FD7qMaMzol6g3ESy2RtmyRgnXS9Ws&callback=propertyLocMap"></script>
</body>
</html>