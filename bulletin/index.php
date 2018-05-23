<!DOCTYPE html>
<html lang="en">
<head>
	<title>JFM Estates | Bulletin</title>
	<?php require_once '../res/templates/bootstrap.php'; ?>
	<?php require_once '../res/templates/google-fonts.php'; ?>

	<?php session_start(); $_SESSION['active_page'] = 'bulletin'; ?>

	<style type="text/css">
		body {
			padding-right: 0px;
		}
		.jfm-card > .jfm-text-right {
			position: fixed;
			top: 20px;
			right: 20px;
			color: red;
			float:right;
			clear:both;
		}

		.card > .jfm-card-header {
			min-height: 80px;
			/*padding-left: 172px;*/
		}

		img.jfm-dp {
			height: 130px;
			width: 130px;
			border-radius: 50%;
			border: 3px solid #B2EBF2;
			position: absolute;
			top: 1.3rem;
			left: 25px;
			z-index: 2;
		}

		@media only screen and (max-width: 1024px) {
		    img.jfm-dp {
		        display: none;
		    }
		}
	</style>
</head>

<body>
	<?php require '../res/templates/nav.php'; ?>

	<div class="container">
		<h1>Bulletin Board</h1>
		<hr><br>
		
		<div class="container jumbotron mb-5 px-lg-5 px-md-5 px-sm-1 px-xs-1 mt-2 pt-lg-5 pt-md-5 pt-sm-0 pt-xs-0 pb-lg-2 pb-md-2 pb-sm-0 pb-xs-0" style="min-height: 400px;">
			<div class="card jfm-card mb-5 bg-light">
				<div class="card-header jfm-card-header bg-midnight text-light pt-4">
					<img class="jfm-dp border-info hidden-md hidden-sm hidden-xs" src="../res/img/jen.jpg" data-toggle="tooltip" data-placement="bottom" title="Jennie Misa">

					<div class="col-lg-10 offset-lg-2 col-md-12 offset-md-0 col-sm-12 offset-sm-0">
						<div class="row">	
							<h1 class="mr-3">Sample Announcement</h1>	
							<!-- <h3 class="mr-3 visible-xs visible-sm">Sample Announcement</h3> -->
							<span class="badge badge-info my-auto">Posted on May 21, 2018</span>
							<!-- <span class="badge badge-light ml-2 my-auto hidden-lg">Jennie Misa</span> -->
							<!-- <small class="text-muted jfm-text-right">Posted on May 21, 2018</small> -->
						</div>
					</div>
				</div>
				<div class="card-body col-lg-10 offset-lg-2 col-md-12 offset-md-0 col-sm-12 offset-sm-0 col-xs-12 offset-xs-0" style="min-height: 100px">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.
				</div> 
			</div>

			<div class="card jfm-card mb-5 bg-light">
				<div class="card-header jfm-card-header bg-midnight text-light pt-4">
					<img class="jfm-dp border-info hidden-md hidden-sm hidden-xs" src="../res/img/jen.jpg" data-toggle="tooltip" data-placement="bottom" title="Jennie Misa">

					<div class="col-lg-10 offset-lg-2 col-md-12 offset-md-0 col-sm-12 offset-sm-0">
						<div class="row">	
							<h1 class="mr-3">Sample Announcement</h1>
							<span class="badge badge-info my-auto">Posted on May 21, 2018</span>
							<!-- <small class="text-muted jfm-text-right">Posted on May 21, 2018</small> -->
						</div>
					</div>
				</div>
				<div class="card-body col-lg-10 offset-lg-2 col-md-12 offset-md-0 col-sm-12 offset-sm-0" style="min-height: 100px">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem.
				</div> 
			</div>

			<div class="card jfm-card mb-5 bg-light">
				<div class="card-header jfm-card-header bg-midnight text-light pt-4">
					<img class="jfm-dp border-info hidden-md hidden-sm hidden-xs" src="https://www.dluxor.com/files/flat-faces-icons-circle-16.png" data-toggle="tooltip" data-placement="bottom" title="Site Administrator">

					<div class="col-lg-10 offset-lg-2 col-md-12 offset-md-0 col-sm-12 offset-sm-0">
						<div class="row">	
							<h1 class="mr-3">Scheduled Site Maintenance</h1>
							<span class="badge badge-info my-auto">Posted on May 21, 2018</span>
							<!-- <small class="text-light my-auto jfm-text-right">Posted on May 21, 2018</small> -->
						</div>
					</div>
				</div>
				<div class="card-body col-lg-10 offset-lg-2 col-md-12 offset-md-0 col-sm-12 offset-sm-0" style="min-height: 100px">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.
				</div> 
			</div>
		</div>
	</div>

	<div class="container mb-3 py-1"></div>
	
	<?php include '../res/templates/footer.php'; ?>

	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip(); 
		});
	</script>
</body>
</html>