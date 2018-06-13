<!DOCTYPE html>
<html lang="en">
<head>
	<title>JFM Estates | Home</title>
	<?php require_once 'res/templates/bootstrap-home.php'; ?>
	<?php require_once 'res/templates/google-fonts.php'; ?>

	<?php session_start(); $_SESSION['active_page'] = 'home'; ?>
</head>

<body>
	<div class="home-bg">
		<?php require 'res/templates/nav-home.php'; ?>

		<div class="container h-100">
			<div class="col-md-10 mx-auto" style="margin-top: 30vh">
				<!-- Nav Tabs -->
				<ul class="nav nav-tabs nav-justified">
					<li class="nav-item">
						<a class="nav-link  text-info active" data-toggle="tab" href="#buy"><h4 class="pt-2">Buy</h4></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-info " data-toggle="tab" href="#rent"><h4 class="pt-2">Rent</h4></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-info " data-toggle="tab" href="#joint-venture"><h4 class="pt-2">Joint Venture</h4></a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content bg-midnight shadow-lg pt-0">
					<div class="tab-pane container active p-3" id="buy">
						<form method="POST" action="/jfmestates-dev/listings" class="shadow-sm">
							<input type="text" value="buy" style="display: none">

							<div class="input-group input-group-lg mb-0 home-search-dekstop">
								<div class="input-group-prepend">
									<span class="input-group-text py-0 px-2 prop-dropdown">
										<select class="form-control" style="background: #e9ecef; border: none;" id="sel1">
											<option selected disabled>PROPERTY TYPE</option>
											<option disabled>----------------------</option>
											<option value="residencial">Residencial</option>
											<option value="commercial">Commercial</option>
											<option value="industrial">Industrial</option>
										</select>
									</span>
								</div>

								<input type="text" class="form-control text-uppercase prop-search" placeholder="&#xf041;  Enter a location" aria-label="Search for Properties" aria-describedby="searchAddon">

								<div class="input-group-append">
									<button type="submit" class="btn btn-info">
										<i class="fa fa-search pr-3"></i>Search
									</button>
								</div>
							</div>
						</form>
					</div>

					<div class="tab-pane container p-3" id="rent">
						<form method="POST" action="/jfmestates-dev/listings" class="shadow-sm">
							<input type="text" value="rent" style="display: none">
							
							<div class="input-group input-group-lg mb-0">
								<div class="input-group-prepend">
									<span class="input-group-text py-0 px-2 prop-dropdown">
										<select class="form-control" style="background: #e9ecef; border: none;" id="sel1">
											<option selected disabled>PROPERTY TYPE</option>
											<option disabled>----------------------</option>
											<option value="residencial">Residencial</option>
											<option value="commercial">Commercial</option>
											<option value="industrial">Industrial</option>
										</select>
									</span>
								</div>

								<input type="text" class="form-control text-uppercase prop-search" placeholder="&#xf041;  Enter a location" aria-label="Search for Properties" aria-describedby="searchAddon">

								<div class="input-group-append">
									<button type="submit" class="btn btn-info">
										<i class="fa fa-search pr-3"></i>Search
									</button>
								</div>
							</div>
						</form>
					</div>

					<div class="tab-pane container p-3" id="joint-venture">
						<form method="POST" action="/jfmestates-dev/listings" class="shadow-sm">
							<input type="text" value="both" style="display: none">
							
							<div class="input-group input-group-lg mb-0">
								<div class="input-group-prepend">
									<span class="input-group-text py-0 px-2 prop-dropdown">
										<select class="form-control" style="background: #e9ecef; border: none;" id="sel1">
											<option selected disabled>PROPERTY TYPE</option>
											<option disabled>----------------------</option>
											<option value="residencial">Residencial</option>
											<option value="commercial">Commercial</option>
											<option value="industrial">Industrial</option>
										</select>
									</span>
								</div>

								<input type="text" class="form-control text-uppercase prop-search" placeholder="&#xf041;  Enter a location" aria-label="Search for Properties" aria-describedby="searchAddon">

								<div class="input-group-append">
									<button type="submit" class="btn btn-info">
										<i class="fa fa-search pr-3"></i>Search
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>	

	<!-- ABOUT US -->
	<div class="container-fluid bg-midnight text-light">
		<div class="container py-5">
			<div class="row pt-3 px-3 mb-5">
				<div class="col-md-6 text-left px-0">
					<h1>About Us</h1>
				</div>

				<div class="col-md-6 text-right px-3 pt-1">
					<a class="btn btn-outline-info" href="/jfmestates-dev/about">
						Read More&nbsp;
						<small><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></small>
					</a>
				</div>
			</div>

			<div class="row px-5 mt-4 mb-5">
				<div class="col-md-4 mb-4 px-5">
					<img class="img-fluid" src="res/img/jen.jpg" style="border-radius: 50%; border: 3px solid #B2EBF2;">
				</div>
				<div class="col-md-8 text-justify px-3 px-lg-5">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam.</p>
				</div>
			</div>

			<div class="row mx-0 mt-5 pt-5 mb-0 border-top border-secondary mx-5">
				<div class="col-md-4 mt-3">
					<div class="card border-0 bg-midnight">
						<center><img class="card-img-top" src="http://www.icons101.com/icon_png/size_512/id_76710/Settings_L.png" style="width: 50%; height: auto; border-radius: 50%;"></center>
						<div class="card-body text-center mt-3">
							<h3>Sample Header</h3>
						</div>
					</div>
				</div>

				<div class="col-md-4 mt-3">
					<div class="card border-0 bg-midnight">
						<center><img class="card-img-top " src="http://www.icons101.com/icon_png/size_512/id_76710/Settings_L.png" style="width: 50%; height: auto; border-radius: 50%;"></center>
						<div class="card-body text-center mt-3">
							<h3>Sample Header</h3>
						</div>
					</div>
				</div>

				<div class="col-md-4 mt-3">
					<div class="card border-0 bg-midnight">
						<center><img class="card-img-top " src="http://www.icons101.com/icon_png/size_512/id_76710/Settings_L.png" style="width: 50%; height: auto; border-radius: 50%;"></center>
						<div class="card-body text-center mt-3">
							<h3>Sample Header</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- LISTINGS -->
	<div class="container pt-5 pb-3 px-2">
		<div class="row px-2">
			<div class="col-md-6 text-left">
				<h1>Featured Listings</h1>
			</div>

			<div class="col-md-6 text-right pt-1">
				<a class="btn btn-outline-info" href="/jfmestates-dev/listings">
					View All Listings&nbsp;
					<small><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></small>
				</a>
			</div>
		</div>

		<!-- PROPERTY GRID -->
		<div class="card-deck mt-2 mb-2 px-0">
			<div class="row mt-3 mb-5 listings mx-3 mx-lg-2 px-0">
				<div class="col-lg-4 col-md-6 py-3 px-0 mx-0 mb-1">
					<div class="card card-listing shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
						<!-- Image -->
						<img class="card-img-top" style="height: 250px" src="res/img/h1.jpg" alt="Card image">

						<!-- Image overlay -->
						<div class="card-img-overlay pr-0 pt-2">		
							<span class="badge badge-light px-4 py-2 mt-3 float-right" style="border-radius: 0px"><b>NEW!</b></span>
							<span class="badge badge-success px-4 py-2 mt-3 float-right" style="border-radius: 0px">For Sale</span>
						</div>

						<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 60,700,000</span>
						<!-- Card Body -->
						<div class="card-body bg-light p-3">
							<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
							<p class="card-text text-muted" style="width:100%; height: 30px; overflow-x: hidden;">
								<i class="fa fa-map-marker"></i>&nbsp;
								Ayala Alabang Village, Muntinlupa City
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 py-3 px-0 mx-0 mb-1">
					<div class="card card-listing shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
						<!-- Image -->
						<img class="card-img-top" style="height: 250px" src="res/img/h2.jpg" alt="Card image">

						<!-- Image overlay -->
						<div class="card-img-overlay pr-0 pt-2">		
							<span class="badge badge-light px-4 py-2 mt-3 float-right" style="border-radius: 0px"><b>NEW!</b></span>
							<span class="badge badge-info px-4 py-2 mt-3 float-right" style="border-radius: 0px">For Rent</span>
						</div>

						<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 60,700,000</span>
						<!-- Card Body -->
						<div class="card-body bg-light p-3">
							<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
							<p class="card-text text-muted" style="width:100%; height: 30px; overflow-x: hidden;">
								<i class="fa fa-map-marker"></i>&nbsp;
								Ayala Alabang Village, Muntinlupa City
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 py-3 px-0 mx-0 mb-1">
					<div class="card card-listing shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
						<!-- Image -->
						<img class="card-img-top" style="height: 250px" src="res/img/bg1.jpg" alt="Card image">

						<!-- Image overlay -->
						<div class="card-img-overlay pr-0 pt-2">		
							<span class="badge badge-secondary px-4 py-2 mt-3 float-right" style="border-radius: 0px">Joint Venture</span>
						</div>

						<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 60,700,000</span>
						<!-- Card Body -->
						<div class="card-body bg-light p-3">
							<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
							<p class="card-text text-muted" style="width:100%; height: 30px; overflow-x: hidden;">
								<i class="fa fa-map-marker"></i>&nbsp;
								Ayala Alabang Village, Muntinlupa City
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 py-3 px-0 mx-0 mb-1">
					<div class="card card-listing shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
						<!-- Image -->
						<img class="card-img-top" style="height: 250px" src="res/img/bg3.jpg" alt="Card image">

						<!-- Image overlay -->
						<div class="card-img-overlay pr-0 pt-2">		
							<span class="badge badge-success px-4 py-2 mt-3 float-right" style="border-radius: 0px">For Sale</span>
						</div>

						<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 60,700,000</span>
						<!-- Card Body -->
						<div class="card-body bg-light p-3">
							<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
							<p class="card-text text-muted" style="width:100%; height: 30px; overflow-x: hidden;">
								<i class="fa fa-map-marker"></i>&nbsp;
								Ayala Alabang Village, Muntinlupa City
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 py-3 px-0 mx-0 mb-1">
					<div class="card card-listing shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
						<!-- Image -->
						<img class="card-img-top" style="height: 250px" src="res/img/bg4.jpg" alt="Card image">

						<!-- Image overlay -->
						<div class="card-img-overlay pr-0 pt-2">		
							<span class="badge badge-info px-4 py-2 mt-3 float-right" style="border-radius: 0px">For Rent</span>
						</div>

						<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 60,700,000</span>
						<!-- Card Body -->
						<div class="card-body bg-light p-3">
							<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
							<p class="card-text text-muted" style="width:100%; height: 30px; overflow-x: hidden;">
								<i class="fa fa-map-marker"></i>&nbsp;
								Ayala Alabang Village, Muntinlupa City
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 py-3 px-0 mx-0 mb-1">
					<div class="card card-listing shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
						<!-- Image -->
						<img class="card-img-top" style="height: 250px" src="res/img/h3.jpg" alt="Card image">

						<!-- Image overlay -->
						<div class="card-img-overlay pr-0 pt-2">		
							<span class="badge badge-success px-4 py-2 mt-3 float-right" style="border-radius: 0px">For Sale</span>
						</div>

						<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 60,700,000</span>
						<!-- Card Body -->
						<div class="card-body bg-light p-3">
							<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
							<p class="card-text text-muted" style="width:100%; height: 30px; overflow-x: hidden;">
								<i class="fa fa-map-marker"></i>&nbsp;
								Ayala Alabang Village, Muntinlupa City
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- BF HOMES LOCATION MAP -->
	<div class="container-fluid mb-0 mt-0 bg-midnight text-white">
		<div class="container py-4">
			<div class="row">
				<div class="col-md-6 text-left px-3">
					<h1>Location Map</h1>
				</div>

				<div class="col-md-6 text-right position-relative px-3 pt-1">
					<a class="btn btn-outline-info" href="/jfmestates-dev/contact">
						Contact Details&nbsp;
						<small><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></small>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="container-fluid bg-midnight px-4 pb-5"> -->
		<div id="googleMap" class="bg-light mt-0" style="height:550px; width: 100%"></div>
	<!-- </div> -->

	<?php include 'res/templates/footer-home.php'; ?>

	<button class="btn btn-outline-info bg-light shadow" id="scroll-top-btn" onclick="topFunction()" data-toggle="tooltip" data-placement="left" title="Back to Top" style="height: 70px; width: 70px; border-radius: 50%;">
		<!-- <img src="res/img/up.png" height="18px" width="25px"> -->
		<i class="fa fa-angle-double-up fa-2x"></i>
	</button>

	<!-- JavaScript -->
	<script src="res/js/google-maps-home.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZW6FD7qMaMzol6g3ESy2RtmyRgnXS9Ws&callback=homeMap"></script>

	<script src="res/js/home-nav.js"></script>
	<script src="res/js/scroll-top.js"></script>
</body>
</html>