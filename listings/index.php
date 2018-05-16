<!DOCTYPE html>
<html lang="en">
<head>
	<title>JFM Estates | Listings</title>
	<?php require_once '../res/templates/bootstrap.php'; ?>
	<?php require_once '../res/templates/google-fonts.php'; ?>

	<?php session_start(); $_SESSION['active_page'] = 'properties'; ?>

	<style type="text/css">
		
		.card:hover {
			transform: scale(1.1); 
		    -webkit-transition: transform 0.3s; /* Safari */
		    transition: transform 0.3s;
		}

		.sticky-top-listing {
			top:65px !important;
		}
	</style>
</head>

<body>
	<?php require '../res/templates/nav.php'; ?>

	<div class="container">
		<h1 class="mb-4">Find the perfect property for you.</h1>
	</div>
	
	<!-- FILTERS -->
	<div class="container-fluid bg-midnight py-4 mb-4 sticky-top sticky-top-listing">
		<div class="container">
			<form method="POST" action="">
				<input type="text" value="buy" style="display: none">

				<div class="input-group input-group-lg mb-0 home-search-dekstop">
					<div class="input-group-prepend">
						<span class="input-group-text py-0 px-2 prop-dropdown">
							<select class="form-control text-info font-weight-bold" style="width: 100%;background: #e9ecef; border: none;" id="sel1">
								<option selected disabled>OFFER TYPE</option>
								<option disabled>----------------------</option>
								<option value="buy">Buy</option>
								<option value="rent">Rent</option>
								<option value="joint-venture">Joint Venture</option>
							</select>
						</span>

						<span class="input-group-text py-0 px-2 prop-dropdown">
							<select class="form-control text-info font-weight-bold" style="width: 100%;background: #e9ecef; border: none;" id="sel1">
								<option selected disabled>PROPERTY TYPE</option>
								<option disabled>----------------------</option>
								<option value="residencial">Residencial</option>
								<option value="commercial">Commercial</option>
								<option value="industrial">Industrial</option>
							</select>
						</span>

						<span class="input-group-text py-0 px-2 prop-dropdown">
							<select class="form-control text-info font-weight-bold" style="width: 100%;background: #e9ecef; border: none;" id="sel1">
								<option selected disabled>PRICE RANGE</option>
								<option disabled>----------------------</option>
								<option value="">Below &#8369; 20,000</option>
								<option value="">&#8369; 20,001 - &#8369; 50,000</option>
								<option value="">&#8369; 50,001 - &#8369; 75,000</option>
								<option value="">&#8369; 75,001 - &#8369; 100,000</option>
								<option value="">Above &#8369; 100,000</option>
							</select>
						</span>

						<span class="input-group-text bg-white pl-4 pr-1" style="border:none;">
							<i class="fa fa-map-marker"></i>
						</span>
					</div>

					<input type="text" class="form-control text-uppercase prop-search" placeholder="location" aria-label="Search for Properties" aria-describedby="searchAddon">

					<div class="input-group-append">
						<button type="submit" class="btn btn-info">
							<i class="fa fa-search pr-3"></i>Search
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- .FILTERS -->

	<div class="container">
		<div class="col-md-12 mb-4">
			<h4 class="text-center">
				<i class="fa fa-chevron-left text-info"></i>
				&nbsp;9 results found&nbsp;
				<i class="fa fa-chevron-right text-info"></i>
			</h4>
		</div>
	</div>

	<div class="container">
		<!-- PROPERTY GRID -->
		<div class="card-deck mt-3 mb-5">
			<div class="row">
				<div class="card col-md-4 p-0 mb-5 shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
					<!-- Image -->
					<img class="card-img-top" style="height: 250px" src="../res/img/h1.jpg" alt="Card image">

					<!-- Image overlay -->
					<div class="card-img-overlay p-0">		
						<span class="badge badge-light px-4 py-2 mt-3 float-right" style="border-radius: 0px"><b>NEW!</b></span>
						<span class="badge badge-success px-4 py-2 mt-3 float-right" style="border-radius: 0px">For Sale</span>
					</div>

					<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 6,700,000</span>
					<!-- Card Body -->
					<div class="card-body bg-light p-3">
						<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
						<p class="card-text" style="width:100%; height: 30px; overflow-x: hidden;">
							<i class="fa fa-map-marker"></i>&nbsp;
							Ayala Alabang Village, Muntinlupa City
						</p>
					</div>
				</div>

				<div class="card col-md-4 p-0 mb-5 shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
					<!-- Image -->
					<img class="card-img-top" style="height: 250px" src="../res/img/h2.jpg" alt="Card image">

					<!-- Image overlay -->
					<div class="card-img-overlay p-0">		
						<span class="badge badge-light px-4 py-2 mt-3 float-right" style="border-radius: 0px"><b>NEW!</b></span>
						<span class="badge badge-info px-4 py-2 mt-3 float-right" style="border-radius: 0px">For Rent</span>
					</div>

					<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 6,700,000</span>
					<!-- Card Body -->
					<div class="card-body bg-light p-3">
						<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
						<p class="card-text" style="width:100%; height: 30px; overflow-x: hidden;">
							<i class="fa fa-map-marker"></i>&nbsp;
							Ayala Alabang Village, Muntinlupa City
						</p>
					</div>
				</div>

				<div class="card col-md-4 p-0 mb-5 shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
					<!-- Image -->
					<img class="card-img-top" style="height: 250px" src="../res/img/bg1.jpg" alt="Card image">

					<!-- Image overlay -->
					<div class="card-img-overlay p-0">		
						<span class="badge badge-secondary px-4 py-2 mt-3 float-right" style="border-radius: 0px">Joint Venture</span>
					</div>

					<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 6,700,000</span>
					<!-- Card Body -->
					<div class="card-body bg-light p-3">
						<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
						<p class="card-text" style="width:100%; height: 30px; overflow-x: hidden;">
							<i class="fa fa-map-marker"></i>&nbsp;
							Ayala Alabang Village, Muntinlupa City
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="card col-md-4 p-0 mb-5 shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
					<!-- Image -->
					<img class="card-img-top" style="height: 250px" src="../res/img/bg3.jpg" alt="Card image">

					<!-- Image overlay -->
					<div class="card-img-overlay p-0">		
						<span class="badge badge-success px-4 py-2 mt-3 float-right" style="border-radius: 0px">For Sale</span>
					</div>

					<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 6,700,000</span>
					<!-- Card Body -->
					<div class="card-body bg-light p-3">
						<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
						<p class="card-text" style="width:100%; height: 30px; overflow-x: hidden;">
							<i class="fa fa-map-marker"></i>&nbsp;
							Ayala Alabang Village, Muntinlupa City
						</p>
					</div>
				</div>

				<div class="card col-md-4 p-0 mb-5 shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
					<!-- Image -->
					<img class="card-img-top" style="height: 250px" src="../res/img/bg4.jpg" alt="Card image">

					<!-- Image overlay -->
					<div class="card-img-overlay p-0">		
						<span class="badge badge-info px-4 py-2 mt-3 float-right" style="border-radius: 0px">For Rent</span>
					</div>

					<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 6,700,000</span>
					<!-- Card Body -->
					<div class="card-body bg-light p-3">
						<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
						<p class="card-text" style="width:100%; height: 30px; overflow-x: hidden;">
							<i class="fa fa-map-marker"></i>&nbsp;
							Ayala Alabang Village, Muntinlupa City
						</p>
					</div>
				</div>

				<div class="card col-md-4 p-0 mb-5 shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
					<!-- Image -->
					<img class="card-img-top" style="height: 250px" src="../res/img/h3.jpg" alt="Card image">

					<!-- Image overlay -->
					<div class="card-img-overlay p-0">		
						<span class="badge badge-success px-4 py-2 mt-3 float-right" style="border-radius: 0px">For Sale</span>
					</div>

					<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 6,700,000</span>
					<!-- Card Body -->
					<div class="card-body bg-light p-3">
						<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
						<p class="card-text" style="width:100%; height: 30px; overflow-x: hidden;">
							<i class="fa fa-map-marker"></i>&nbsp;
							Ayala Alabang Village, Muntinlupa City
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="card col-md-4 p-0 mb-5 shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
					<!-- Image -->
					<img class="card-img-top" style="height: 250px" src="../res/img/bg5.jpg" alt="Card image">

					<!-- Image overlay -->
					<div class="card-img-overlay p-0">		
						<span class="badge badge-success px-4 py-2 mt-3 float-right" style="border-radius: 0px">For Sale</span>
					</div>

					<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 6,700,000</span>
					<!-- Card Body -->
					<div class="card-body bg-light p-3">
						<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
						<p class="card-text" style="width:100%; height: 30px; overflow-x: hidden;">
							<i class="fa fa-map-marker"></i>&nbsp;
							Ayala Alabang Village, Muntinlupa City
						</p>
					</div>
				</div>

				<div class="card col-md-4 p-0 mb-5 shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
					<!-- Image -->
					<img class="card-img-top" style="height: 250px" src="../res/img/bg2.jpg" alt="Card image">

					<!-- Image overlay -->
					<div class="card-img-overlay p-0">		
						<span class="badge badge-success px-4 py-2 mt-3 float-right" style="border-radius: 0px">For Sale</span>
					</div>

					<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 6,700,000</span>
					<!-- Card Body -->
					<div class="card-body bg-light p-3">
						<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
						<p class="card-text" style="width:100%; height: 30px; overflow-x: hidden;">
							<i class="fa fa-map-marker"></i>&nbsp;
							Ayala Alabang Village, Muntinlupa City
						</p>
					</div>
				</div>

				<div class="card col-md-4 p-0 mb-5 shadow" style="cursor: pointer" onclick="window.location='/jfmestates-dev/listings/sale-new-three-storey-house-in-alabang-sample/'">
					<!-- Image -->
					<img class="card-img-top" style="height: 250px" src="../res/img/h4.jpg" alt="Card image">

					<!-- Image overlay -->
					<div class="card-img-overlay p-0">		
						<span class="badge badge-info px-4 py-2 mt-3 float-right" style="border-radius: 0px">For Rent</span>
					</div>

					<span class="badge badge bg-midnight text-light py-2" style="border-radius: 0px; font-size: 1rem">&#8369; 6,700,000</span>
					<!-- Card Body -->
					<div class="card-body bg-light p-3">
						<h4 div="card-title" style="width:100%; height: 30px; overflow-x: hidden;">New Three-Storey House in Alabang</h4>
						<p class="card-text" style="width:100%; height: 30px; overflow-x: hidden;">
							<i class="fa fa-map-marker"></i>&nbsp;
							Ayala Alabang Village, Muntinlupa City
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- .PROPERTY GRID -->
	</div>
	
	<?php include '../res/templates/footer.php'; ?>
</body>
</html>