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
				<form method="POST" action="" class="shadow-lg">
					<div class="input-group input-group-lg mb-3">
						<input type="text" class="form-control" placeholder="Find the perfect property for you." aria-label="Search for Properties" aria-describedby="searchAddon">
						<div class="input-group-append">
							<button type="submit" class="btn btn-info">Search</button>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>	

	<div style="height:800px;background-color:#fff;" class="container">This div is only here to enable scrolling (height = 800 pixels).</div>

	<?php include 'res/templates/footer.php'; ?>

	<button class="btn btn-outline-info bg-light shadow" id="scroll-top-btn" onclick="topFunction()" data-toggle="tooltip" data-placement="left" title="Back to Top" style="height: 70px; width: 70px">
		<!-- <img src="res/img/up.png" height="18px" width="25px"> -->
		<i class="fa fa-angle-double-up fa-2x"></i>
	</button>
</body>

<script src="res/js/home-nav.js"></script>
<script src="res/js/scroll-top.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
</html>