<!DOCTYPE html>
<html lang="en">
<head>
	<title>JFM Estates | Contact Us</title>
	<?php require_once '../res/templates/bootstrap.php'; ?>
	<?php require_once '../res/templates/google-fonts.php'; ?>

	<?php session_start(); $_SESSION['active_page'] = 'contact'; ?>

	<style type="text/css">
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
</head>

<body>
	<?php require '../res/templates/nav.php'; ?>

	<div class="container">
		<h1>Get in touch with us!</h1>

		<hr><br>

		<div class="row">
			<div class="col-md-6 px-4">	
				<h3>We'd love to hear from you.</h3>
				<p>Are you looking to buy, sell, or rent property? Send us a message below. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

				<div class="col-md-12 bg-info text-light p-4 mb-5 shadow">
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

						<!-- INQUIRY TYPE -->
						<div class="row">
							<div class="col-md-12">Inquiry Type</div>

							<div class="col-md-12 text-center">
								<div class="form-group">
									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="inquiryOptions" id="inlineRadio1" value="sale" checked> For Sale
										</label>
									</div>
									&nbsp;
									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="inquiryOptions" id="inlineRadio2" value="rent"> For Rent
										</label>
									</div>
								</div>
							</div>
						</div>

						<!-- MESSAGE -->
						<label for="message">
							Your Message
							<span class="text-danger font-weight-bold">*</span>
						</label>
						<textarea class="form-control mb-4" id="message" rows="8" placeholder="Please list down your requirements, budget, and estimated dates of occupancy. [SAMPLE ONLY]"></textarea>

						<div class="form-group mb-1 text-right">
							<button type="submit" class="btn bg-midnight text-light py-2">
								&nbsp;<i class="fa fa-send"></i>&nbsp;
								&nbsp;Submit&nbsp;
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="col-md-6 px-4">
				<h3>Reach us any way you want.</h3>

				<div class="jumbotron px-5 py-4 mt-4 border-0">
					<div class="row shadow-sm">
						<div class="col-md-3 bg-info text-light text-center py-2">
							<i class="fa fa-phone mr-2"></i>
							Globe
						</div>
						<div class="col-md-9 bg-light py-2">(+63) 917 540 0205</div>
					</div>

					<div class="row shadow-sm mt-4">
						<div class="col-md-5 bg-info text-light text-center py-2">
							<i class="fa fa-envelope mr-2"></i>
							Email Address
						</div>
						<div class="col-md-7 bg-light py-2">realtorjennie@gmail.com</div>
					</div>
				</div>

				<h3 class="mt-5">Pay us a visit!</h3>
				<!-- <span class="badge badge-secondary p-2" style="width: 100%; border-radius: 0">
					<i class="fa fa-map-marker"></i> &nbsp;
					153 Aguirre Avenue, BF Homes, Paranaque
				</span> -->
				<div id="googleMap" class="col-md-12 bg-light mt-4" style="height:350px"></div>
				<span class="badge badge-secondary p-2 mb-2" style="width: 100%; border-radius: 0">
					<i class="fa fa-map-marker"></i> &nbsp;
					153 Aguirre Avenue, BF Homes, Paranaque City, Philippines
				</span>
			</div>
		</div>

		<br>
	</div>
	
	<?php include '../res/templates/footer.php'; ?>

	<!-- JavaScript -->
	<script src="../res/js/google-maps.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZW6FD7qMaMzol6g3ESy2RtmyRgnXS9Ws&callback=homeMap"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../res/intl-tel-input/build/js/intlTelInput.js"></script>
	<script>
	    $("#phone-number").intlTelInput({

	      initialCountry: "ph",

	      preferredCountries: ['ph', 'us'],

	      utilsScript: "../res/intl-tel-input/build/js/utils.js"
	    });
	</script>
</body>
</html>