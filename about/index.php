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

	<div class="container">
		<h1>About Us Page</h1>
		<hr><br>

		<div style="height: 400px"></div>
	</div>

	<div class="container-fluid bg-light" style="height: 800px">
	</div>
	
	<div class="container-fluid bg-midnight" style="height: 600px">
	</div>

	<?php include '../res/templates/footer.php'; ?>
</body>
</html>