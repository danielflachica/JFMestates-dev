<!DOCTYPE html>
<html lang="en">
<head>
	<title>JFM Estates | About</title>
	<?php require_once '../res/templates/bootstrap.php'; ?>
	<?php require_once '../res/templates/google-fonts.php'; ?>

	<?php session_start(); $_SESSION['active_page'] = 'about'; ?>
</head>

<body>
	<?php require '../res/templates/nav.php'; ?>

	<div class="container pb-3">
		<h1>About Us</h1>
	</div>

	<div class="container-fluid about-bg border-top " style="min-height: 400px;">
		<div class="container">
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-7 p-5 bg-white text-justify" style="height: 100%">
					<h2>About us</h2>
					<hr class="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid bg-midnight">
		<div class="container py-5" id="services">
			<div class="row mb-5">
				<div class="col-md-12 text-center text-white">
					<h1>Services Offered</h1>
				</div>
			</div>
			<div class="row bg-midnight mx-0 mt-3">
				<div class="col-md-4">
					<div class="card border-0 bg-midnight text-light">
						<center><img class="card-img-top" src="http://www.icons101.com/icon_png/size_512/id_76710/Settings_L.png" style="width: 50%; height: auto; border-radius: 50%;"></center>
						<div class="card-body mt-3">
							<h3>Sample Header</h3>
							<p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card border-0 bg-midnight text-light">
						<center><img class="card-img-top " src="http://www.icons101.com/icon_png/size_512/id_76710/Settings_L.png" style="width: 50%; height: auto; border-radius: 50%;"></center>
						<div class="card-body mt-3">
							<h3>Sample Header</h3>
							<p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card border-0 bg-midnight text-light">
						<center><img class="card-img-top " src="http://www.icons101.com/icon_png/size_512/id_76710/Settings_L.png" style="width: 50%; height: auto; border-radius: 50%;"></center>
						<div class="card-body mt-3">
							<h3>Sample Header</h3>
							<p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include '../res/templates/footer.php'; ?>
</body>
</html>