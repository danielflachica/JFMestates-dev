<!DOCTYPE html>
<html lang="en">
<head>
	<title>JFM Estates | Bulletin</title>
	<?php require_once '../res/templates/bootstrap.php'; ?>
	<?php require_once '../res/templates/google-fonts.php'; ?>

	<?php session_start(); $_SESSION['active_page'] = 'bulletin'; ?>

	<style type="text/css">
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
			left: 20px;
			z-index: 2;
		}

		h1 {
			/*margin-top: 0.4rem;
			margin-bottom: 0.4rem;*/
		}

		@media only screen and (max-width: 600px) {
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
		
		<div class="container mb-5 px-5">
			<div class="card jfm-card mb-5 bg-light">
				<div class="card-header jfm-card-header bg-midnight text-light pt-4">
					<img class="jfm-dp border-info hidden-sm hidden-xs" src="../res/img/jen.jpg" data-toggle="tooltip" data-placement="bottom" title="Jennie Misa">

					<div class="col-md-10 offset-md-2 col-sm-12 offset-sm-0">
						<div class="row">	
							<h1 class="mr-3">Hello World!</h1>
							<span class="badge badge-info my-auto">Posted on May 21, 2018</span>
							<!-- <small class="text-muted jfm-text-right">Posted on May 21, 2018</small> -->
						</div>
					</div>
				</div>
				<div class="card-body col-md-10 offset-md-2 col-sm-12 offset-sm-0">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.
				</div> 
			</div>

			<div class="card jfm-card mb-5 bg-light">
				<div class="card-header jfm-card-header bg-midnight text-light pt-4">
					<img class="jfm-dp border-info hidden-sm hidden-xs" src="../res/img/jen.jpg" data-toggle="tooltip" data-placement="bottom" title="Jennie Misa">

					<div class="col-md-10 offset-md-2 col-sm-12 offset-sm-0">
						<div class="row">	
							<h1 class="mr-3">Hello World!</h1>
							<span class="badge badge-info my-auto">Posted on May 21, 2018</span>
							<!-- <small class="text-muted jfm-text-right">Posted on May 21, 2018</small> -->
						</div>
					</div>
				</div>
				<div class="card-body col-md-10 offset-md-2 col-sm-12 offset-sm-0">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem.
				</div> 
			</div>

			<div class="card jfm-card mb-5 bg-light">
				<div class="card-header jfm-card-header bg-midnight text-light pt-4">
					<img class="jfm-dp border-info hidden-sm hidden-xs" src="http://www.icons101.com/icon_png/size_512/id_76710/Settings_L.png" data-toggle="tooltip" data-placement="bottom" title="Site Administrator">

					<div class="col-md-10 offset-md-2 col-sm-12 offset-sm-0">
						<div class="row">	
							<h1 class="mr-3">Scheduled Site Maintenance</h1>
							<span class="badge badge-info my-auto">Posted on May 21, 2018</span>
							<!-- <small class="text-light my-auto jfm-text-right">Posted on May 21, 2018</small> -->
						</div>
					</div>
				</div>
				<div class="card-body col-md-10 offset-md-2 col-sm-12 offset-sm-0">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum rerum eos deleniti corporis inventore libero, vitae adipisci qui tenetur dolorem alias ad veniam, voluptatum cupiditate quia accusamus. Omnis, ab, repudiandae.
				</div> 
			</div>
		</div>
	</div>
	<div class="row mb-4 py-1"></div>
	
	<?php include '../res/templates/footer.php'; ?>

	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip(); 
		});
	</script>
</body>
</html>