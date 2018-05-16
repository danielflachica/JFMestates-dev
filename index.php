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

		<div class="container">
			<div class="row text-center my-4">
				<!-- <h1>Find the perfect property for you.</h1> -->
			</div>

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
						<a class="nav-link text-info " data-toggle="tab" href="#both"><h4 class="pt-2">Buy or Rent</h4></a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content bg-midnight shadow-lg pt-0">
					<div class="tab-pane container active p-3" id="buy">
						<form method="POST" action="" class="shadow-sm">
							<input type="text" value="buy" style="display: none">

							<div class="input-group input-group-lg mb-0">
								<!-- <div class="input-group-prepend">
									<div class="form-group">
										<select class="form-control" id="sel1">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div>
								</div> -->

								<!-- <div class="input-group-prepend bg-light py-2 px-1">
									<div class="col-md-12">
										@
									</div>

									<div class="col-md-12"><i class="fa fa-map-marker"></i></div>
								</div> -->

										<select class="form-control rounded-right" id="sel1">
											<option>Residencial</option>
											<option>Commercial</option>
											<option>Industrial</option>
										</select>

								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fa fa-map-marker"></i>
									</span>
								</div>

								<input type="text" class="form-control" placeholder="Enter a location" aria-label="Search for Properties" aria-describedby="searchAddon">

								<div class="input-group-append">
									<button type="submit" class="btn btn-info">Search</button>
								</div>
							</div>
						</form>
					</div>

					<div class="tab-pane container p-3" id="rent">
						<form method="POST" action="" class="shadow-sm">
							<input type="text" value="rent" style="display: none">
							<div class="input-group input-group-lg mb-0">
								<input type="text" class="form-control" placeholder="Find the perfect property for you." aria-label="Search for Properties" aria-describedby="searchAddon">
								<div class="input-group-append">
									<button type="submit" class="btn btn-info">Search</button>
								</div>
							</div>
						</form>
					</div>

					<div class="tab-pane container p-3" id="both">
						<form method="POST" action="" class="shadow-sm">
							<input type="text" value="both" style="display: none">
							<div class="input-group input-group-lg mb-0">
								<input type="text" class="form-control" placeholder="Find the perfect property for you." aria-label="Search for Properties" aria-describedby="searchAddon">
								<div class="input-group-append">
									<button type="submit" class="btn btn-info">Search</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- <form method="POST" action="" class="shadow-lg">
					<div class="input-group input-group-lg mb-3">
						<input type="text" class="form-control" placeholder="Find the perfect property for you." aria-label="Search for Properties" aria-describedby="searchAddon">
						<div class="input-group-append">
							<button type="submit" class="btn btn-info">Search</button>
						</div>
					</div>
				</form> -->
			</div>

		</div>
	</div>	

	<div style="height:800px;background-color:#fff;" class="container">This div is only here to enable scrolling (height = 800 pixels).</div>

	<!-- BF HOMES LOCATION MAP -->
	<div id="googleMap" class="bg-light mt-0" style="height:550px; width: 100%"></div>

	<?php include 'res/templates/footer-home.php'; ?>

	<button class="btn btn-outline-info bg-light shadow" id="scroll-top-btn" onclick="topFunction()" data-toggle="tooltip" data-placement="left" title="Back to Top" style="height: 70px; width: 70px">
		<!-- <img src="res/img/up.png" height="18px" width="25px"> -->
		<i class="fa fa-angle-double-up fa-2x"></i>
	</button>

	<!-- JavaScript -->
	<script src="res/js/google-maps-home.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZW6FD7qMaMzol6g3ESy2RtmyRgnXS9Ws&callback=homeMap"></script>

	<script src="res/js/home-nav.js"></script>
	<script src="res/js/scroll-top.js"></script>
	<script>
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip(); 
	});
	</script>
</body>
</html>