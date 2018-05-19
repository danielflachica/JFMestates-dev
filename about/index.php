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
		<h1>About Us Page</h1>
	</div>

	<div class="container-fluid about-bg border-top">
		<div class="container">
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-7 p-5 bg-white text-justify" style="height: 100%">
					<h2>About us</h2>
					<hr class="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid bg-midnight" style="height: 600px">
	</div>

	<?php include '../res/templates/footer.php'; ?>
</body>
</html>