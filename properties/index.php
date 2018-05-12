<!DOCTYPE html>
<html lang="en">
<head>
	<title>JFM Estates | Properties</title>
	<?php require_once '../res/templates/bootstrap.php'; ?>
	<?php require_once '../res/templates/google-fonts.php'; ?>

	<?php session_start(); $_SESSION['active_page'] = 'properties'; ?>
</head>

<body>
	<?php require '../res/templates/nav.php'; ?>

	<div class="container">
		<h1>Properties Page</h1>
	</div>
	
	<?php include '../res/templates/footer.php'; ?>
</body>
</html>