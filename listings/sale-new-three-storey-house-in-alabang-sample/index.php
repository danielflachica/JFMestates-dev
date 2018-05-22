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
		/*.slider-img-group > .row > .col-sm-4 > li.active img, video {
			opacity: 1;
		}*/
		.slider-img-group > .row > .active img, video {
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

			.intl-tel-input {
		display: table-cell;
			width: 100vh;
		}
		.intl-tel-input .selected-flag {
		z-index: 4;
		background: #e9ecef;
		border-right: 1px solid #ccc;
		}
		.intl-tel-input .country-list {
		z-index: 5;
		color: #000;
		}
		.input-group .intl-tel-input .form-control {
		border-top-left-radius: 4px;
		border-top-right-radius: 0;
		border-bottom-left-radius: 0px;
		border-bottom-right-radius: 0;
		}
	</style>

	<?php session_start(); $_SESSION['active_page'] = 'properties'; ?>
</head>

<body>
	<?php require '../../res/templates/nav-legal.php'; ?>

	<?php include '../../modals/image-1.php';?>

	<div class="container mb-4">
		<a class="btn btn-sm btn-outline-info px-3 mb-3" href="/jfmestates-dev/listings">
			<small><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-left"></i></small>&nbsp;
			Back to Listings
		</a>
		<h1><span class="text-info font-weight-bold">FOR SALE:</span> New Three-Storey House in Alabang [Sample]</h1>
	</div>
	
	<!-- Carousel -->
	<div class="container-fluid mt-4 bg-midnight">
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
								<img class="d-block img-fluid"  style="width: 100%;height:520px" src="../../res/img/h4.jpg" alt="Fifth slide">
							</div>
							<div class="carousel-item" data-slide-number="4">
								<!-- <video class="d-block" style="/*width: 100%;*/height:520px" controls>
									<source src="../../res/vids/Avengers.mp4" type="video/mp4">
								</video> -->
								<video class="d-block" style="/*width: 100%;*/height:520px" controls>
									<source src="../../res/vids/housetour.mp4" type="video/mp4">
								</video>
							</div>
						</div>

						<!-- INDICATORS -->
						<div class="container slider-img-group" style="background-color: #121212">
						    <div class="row text-center flex-nowrap text-light">
						        <div data-target="#carouselExampleControls" data-slide-to="0" style="cursor: pointer" class="col-sm-4 px-1 mt-3 mb-0 ">
						        	<img src="../../res/img/h1.jpg" class="img-fluid" style="width: 100%; height: 100%">
						        </div>
						        <div data-target="#carouselExampleControls" data-slide-to="1" style="cursor: pointer" class="col-sm-4 px-1 mt-3 mb-0">
						        	<img src="../../res/img/h2.jpg" class="img-fluid" style="width: 100%; height: 100%">
						        </div>
						        <div data-target="#carouselExampleControls" data-slide-to="2" style="cursor: pointer" class="col-sm-4 px-1 mt-3 mb-0">
						        	<img src="../../res/img/h3.jpg" class="img-fluid" style="width: 100%; height: 100%">
						        </div>
						        <div data-target="#carouselExampleControls" data-slide-to="3" style="cursor: pointer" class="col-sm-4 px-1 mt-3 mb-0">
						        	<img src="../../res/img/h4.jpg" class="img-fluid" style="width: 100%; height: 100%">
						        </div>
						        <div data-target="#carouselExampleControls" data-slide-to="4" style="cursor: pointer" class="col-sm-4 px-1 mt-3">
							        <!-- <video style="width: 100%; height: 100%">
										<source src="../../res/vids/Avengers.mp4" type="video/mp4">
									</video> -->
									<video style="width: 100%; height: 97%">
										<source src="../../res/vids/housetour.mp4" type="video/mp4">
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
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-6">
				<h1>Property Details</h1>

				<div class="jumbotron px-5 py-4 mt-4">
					<div class="row shadow-sm">
						<div class="col-md-4 bg-info text-light text-center py-2">
							<i class="fa fa-book mr-2"></i>
							Listing Type
						</div>
						<div class="col-md-8 bg-light py-2">For Sale</div>
					</div>

					<div class="row shadow-sm mt-4">
						<div class="col-md-3 bg-info text-light text-center py-2">
							<i class="fa fa-dollar mr-2"></i>
							Price
						</div>
						<div class="col-md-9 bg-light py-2">&#8369; 60,700,000</div>
					</div>

					<div class="row shadow-sm mt-4">
						<div class="col-md-5 bg-info text-light text-center py-2">
							<i class="fa fa-home mr-2"></i>
							Lot Area (m<sup>2</sup>)
						</div>
						<div class="col-md-7 bg-light py-2">1285</div>
					</div>

					<div class="row shadow-sm mt-4">
						<div class="col-md-5 bg-info text-light text-center py-2">
							<i class="fa fa-home mr-2"></i>
							Floor Area (m<sup>2</sup>)
						</div>
						<div class="col-md-7 bg-light py-2">780</div>
					</div>

					<div class="row shadow-sm mt-4">
						<div class="col-md-4 bg-info text-light text-center py-2">
							<i class="fa fa-bed mr-2"></i>
							Bedrooms
						</div>
						<div class="col-md-8 bg-light py-2">5</div>
					</div>

					<div class="row shadow-sm mt-4">
						<div class="col-md-4 bg-info text-light text-center py-2">
							<i class="fa fa-bed mr-2"></i>
							Bathrooms
						</div>
						<div class="col-md-8 bg-light py-2">7</div>
					</div>

					<div class="row shadow-sm mt-4">
						<div class="col-md-4 bg-info text-light text-center py-2">
							<i class="fa fa-car mr-2"></i>
							Car Spaces
						</div>
						<div class="col-md-8 bg-light py-2">4</div>
					</div>
				</div>

				<hr class="my-5 font-weight-bold">

				<div class="mb-5">
					<h1 class="mb-4">Property Features</h1>

					<h4>Lorem Ipsum</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut egestas elit risus, sit amet rutrum nisl accumsan id. Aenean venenatis tristique sapien, id rhoncus eros. Donec in imperdiet ipsum.</p>

					<h4>Lorem Ipsum</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut egestas elit risus, sit amet rutrum nisl accumsan id. Aenean venenatis tristique sapien, id rhoncus eros. Donec in imperdiet ipsum. nisl accumsan id. Aenean venenatis tristique sapien, id rhoncus eros. Donec in imperdiet ipsum.</p>

					<h4>Lorem Ipsum</h4>
					<p>Viewing by appointment.</p>
				</div>
			</div>

			<!-- RIGHT COL -->
			<div class="col-md-5 offset-md-1">
				<div class="shadow-sm mb-5">
					<div class="bg-info text-light p-4 pb-0">
						<h2>Contact Seller</h2>
					</div>
					<div class="bg-light p-4">
						<form>
							<!-- FULL NAME -->
							<div class="form-group">
								<label for="name">
									Full Name
									<span class="text-danger font-weight-bold">*</span>
								</label>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="name-addon">
											<i class="fa fa-user"></i>
										</span>
									</div>
									<input type="text" class="form-control" id="name" name="fullname" aria-describedby="name-addon" placeholder="e.g. John Doe">
								</div>
							</div>

							<!-- EMAIL -->
							<div class="form-group">
								<label for="email">
									Email Address
									<span class="text-danger font-weight-bold">*</span>
								</label>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="email-addon">
											<i class="fa fa-envelope"></i>
										</span>
									</div>
									<input type="email" class="form-control" id="email" aria-describedby="email-addon" name="email">
								</div>
							</div>

							<!-- MOBILE NUMBER -->
							<div class="form-group">
								<label for="number">
									Mobile Number
									<span class="text-danger font-weight-bold">*</span>
								</label>
								<input type="tel" class="form-control" id="phone-number" name="phone-number">
							</div>

							<!-- MESSAGE -->
							<label for="message">
								Your Message
								<span class="text-danger font-weight-bold">*</span>
							</label>
							<textarea class="form-control mb-4" id="message" rows="8" placeholder="Hi, I'm interested in getting this property. [SAMPLE ONLY]"></textarea>

							<div class="form-group mb-1 text-right">
								<button type="submit" class="btn bg-midnight text-light py-2">
									&nbsp;<i class="fa fa-send"></i>&nbsp;
									&nbsp;Submit&nbsp;
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Location Map -->
	<span class="badge badge-secondary p-2 pt-3 mb-0 mt-4" style="width: 100%; border-radius: 0">
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../../res/intl-tel-input/build/js/intlTelInput.js"></script>
	<script>
	    $("#phone-number").intlTelInput({

	      initialCountry: "ph",

	      preferredCountries: ['ph', 'us'],

	      utilsScript: "../../res/intl-tel-input/build/js/utils.js"
	    });
	</script>
</body>
</html>