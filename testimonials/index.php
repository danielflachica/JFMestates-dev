<!DOCTYPE html>
<html lang="en">
<head>
	<title>JFM Estates | Testimonials</title>
	<?php require_once '../res/templates/bootstrap.php'; ?>
	<?php require_once '../res/templates/google-fonts.php'; ?>

	<?php session_start(); $_SESSION['active_page'] = 'testimonials'; ?>

	<?php 
		if(isset($_GET['id'])) {
			$id = $_GET['id'];
		}

	?>
</head>

<body>
	<?php require '../res/templates/nav.php'; ?>

	<div class="container">
		<h1>Testimonials</h1>

		<?php if(isset($id)): ?>
			<h4><?= $id ?></h4>
		<?php endif; ?>

		<hr><br>
	</div>

	<div class="container" style="min-height: 400px;">
		<?php include '../modals/testimonial.php'; ?>

		<div class="card-columns">
			<div class="card my-2 bg-light">
				<div class="card-body text-center">
					<div class="row">
						<div class="col-md-2">
							<i class="fa fa-quote-left fa-2x"></i>
						</div>
						<div class="col-md-10 px-2">
							<blockquote class="card-text text-left">
								Lorem ipsum dolor sit amet, conctus et netus et malesuada fames ac turpis egestas. Duis non accumsan nulla. Sed sit amet sem vulputate...
							</blockquote>
						</div>
					</div>
				</div>
				<div class="card-footer bg-info text-light text-right" style="cursor: pointer;" data-toggle="modal" data-target="#testimonial_modal">
					Continue Reading <strong><i class="fa fa-angle-double-right"></i></strong>
				</div>
			</div>
			
			<div class="card my-2 bg-light">
				<div class="card-body text-center">
					<div class="row">
						<div class="col-md-2">
							<i class="fa fa-quote-left fa-2x"></i>
						</div>
						<div class="col-md-10 px-2">
							<blockquote class="card-text text-left">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget sollicitudin risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat, tortor at congue condimentum, dolor nibh dignissim libero, eget lacinia mi nibh eu nunc. Morbi finibus efficitur consectetur...
							</blockquote>
						</div>
					</div>
				</div>
				<div class="card-footer bg-info text-light text-right" style="cursor: pointer;" data-toggle="modal" data-target="#testimonial_modal">
					Continue Reading <strong><i class="fa fa-angle-double-right"></i></strong>
				</div>
			</div>

			<div class="card my-2 bg-light">
				<div class="card-body text-center">
					<div class="row">
						<div class="col-md-2">
							<i class="fa fa-quote-left fa-2x"></i>
						</div>
						<div class="col-md-10 px-2">
							<blockquote class="card-text text-left">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget sollicitudin risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat, tortor at congue...
							</blockquote>
						</div>
					</div>
				</div>
				<div class="card-footer bg-info text-light text-right" style="cursor: pointer;" data-toggle="modal" data-target="#testimonial_modal">
					Continue Reading <strong><i class="fa fa-angle-double-right"></i></strong>
				</div>
			</div>

			<div class="card my-2 bg-light">
				<div class="card-body text-center">
					<div class="row">
						<div class="col-md-2">
							<i class="fa fa-quote-left fa-2x"></i>
						</div>
						<div class="col-md-10 px-2">
							<blockquote class="card-text text-left">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget sollicitudin risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat, tortor at congue condimentum, dolor nibh dignissim libero, eget lacinia mi nibh eu nunc. Morbi finibus...
							</blockquote>
						</div>
					</div>
				</div>
				<div class="card-footer bg-info text-light text-right" style="cursor: pointer;" data-toggle="modal" data-target="#testimonial_modal">
					Continue Reading <strong><i class="fa fa-angle-double-right"></i></strong>
				</div>
			</div>

			<div class="card my-2 bg-light">
				<div class="card-body text-center">
					<div class="row">
						<div class="col-md-2">
							<i class="fa fa-quote-left fa-2x"></i>
						</div>
						<div class="col-md-10 px-2">
							<blockquote class="card-text text-left">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget sollicitudin risus. Lorem ipsum dolor  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis non accumsan nulla. Sed sit amet sem vulputate tristique senectus et netus...
							</blockquote>
						</div>
					</div>
				</div>
				<div class="card-footer bg-info text-light text-right" style="cursor: pointer;" data-toggle="modal" data-target="#testimonial_modal">
					Continue Reading <strong><i class="fa fa-angle-double-right"></i></strong>
				</div>
			</div>

			<div class="card my-2 bg-light">
				<div class="card-body text-center">
					<div class="row">
						<div class="col-md-2">
							<i class="fa fa-quote-left fa-2x"></i>
						</div>
						<div class="col-md-10 px-2">
							<blockquote class="card-text text-left">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget sollicitudin risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat, tortor at congue condimentum, dolor nibh dignissim accumsan ex pulvinar et. Pellentesque habitant morbi tristique senectus et net Sed sit amet sem vulputate tristique senectus et netus...
							</blockquote>
						</div>
					</div>
				</div>
				<div class="card-footer bg-info text-light text-right" style="cursor: pointer;" data-toggle="modal" data-target="#testimonial_modal">
					Continue Reading <strong><i class="fa fa-angle-double-right"></i></strong>
				</div>
			</div>

			<div class="card my-2 bg-light">
				<div class="card-body text-center">
					<div class="row">
						<div class="col-md-2">
							<i class="fa fa-quote-left fa-2x"></i>
						</div>
						<div class="col-md-10 px-2">
							<blockquote class="card-text text-left">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget sollicitudin risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit...
							</blockquote>
						</div>
					</div>
				</div>
				<div class="card-footer bg-info text-light text-right" style="cursor: pointer;" data-toggle="modal" data-target="#testimonial_modal">
					Continue Reading <strong><i class="fa fa-angle-double-right"></i></strong>
				</div>
			</div>

			<div class="card my-2 bg-light">
				<div class="card-body text-center">
					<div class="row">
						<div class="col-md-2">
							<i class="fa fa-quote-left fa-2x"></i>
						</div>
						<div class="col-md-10 px-2">
							<blockquote class="card-text text-left">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget sollicitudin risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerattate tristique senectus et netus...
							</blockquote>
						</div>
					</div>
				</div>
				<div class="card-footer bg-info text-light text-right" style="cursor: pointer;" data-toggle="modal" data-target="#testimonial_modal">
					Continue Reading <strong><i class="fa fa-angle-double-right"></i></strong>
				</div>
			</div>
		</div>
	</div>

	<br><br>

	<div id="accordion">

		<div class="card" id="submit-testimonial">
			<div class="card-header bg-light" data-toggle="collapse" href="#submitTestimonial" style="cursor: pointer;">
				<div class="container">
					<a class="card-link text-center">
						<h5>Pleased with our services? We'd love to hear from you!</h5>
						<h2 class="text-primary">Write a Testimonial</h2>
					</a>
				</div>
			</div>
			<div id="submitTestimonial" class="collapse bg-midnight text-light" data-parent="#accordion">							
				<div class="container">
					<div class="card-body">
						<br>
						<div class="row">
							<div class="col-md-3"></div>

							<div class="col-md-6">
								<form>
									<div class="form-group">
										<label for="name">
											Full Name
											<span class="text-danger">*</span>
										</label>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="name-addon">
													<i class="fa fa-user"></i>
												</span>
											</div>
											<input type="text" class="form-control" id="name" aria-describedby="name-addon" placeholder="e.g. John Doe">
										</div>
										<small id="emailHelp" class="form-text text-muted">If you prefer to keep your information private, enter <i>Anonymous</i> in place of your name.</small>
									</div>

									<div class="form-group">
										<label for="location">
											Location
											<span class="text-danger">*</span>
										</label>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="location-addon">
													&nbsp;<i class="fa fa-map-marker"></i>
												</span>
											</div>
											<input type="text" class="form-control" id="location" aria-describedby="location-addon" placeholder="Where did you buy from us?">
										</div>
									</div>
									
									<label for="comments">
										Your Message
										<span class="text-danger">*</span>
									</label>
									<textarea class="form-control" id="comments" rows="10"></textarea>

									<br>

									<button type="submit" class="btn btn-primary float-right">
										&nbsp;<i class="fa fa-send"></i>&nbsp;
										&nbsp;Submit&nbsp;
									</button>
								</form>
							</div>

							<div class="col-md-3"></div>
						</div>
						<br>
					</div>
				</div>
			</div>
		</div>

	</div>

	<?php include '../res/templates/footer.php'; ?>

</body>
</html>