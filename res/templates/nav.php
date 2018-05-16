<?php
	if(!isset($_SESSION)) {
		session_start();
	}

	$highlight = $_SESSION['active_page'];
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top shadow" id="nav-main">
		<div class="container">
			<!-- Brand Logos -->
			<a class="navbar-brand" href="/jfmestates-dev">
				<img src="../res/img/logo.png" alt="Logo" style="width:40px;">
			</a>
			<a class="navbar-brand" href="/jfmestates-dev">JFM Estates</a>

			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Navbar Links -->
			<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item px-1">
						<a class="nav-link <?php if($highlight=='properties' && $highlight!='legal') echo 'active'; ?>" href="/jfmestates-dev/listings">Listings</a>
					</li>
					<li class="nav-item px-1">
						<a class="nav-link <?php if($highlight=='about' && $highlight!='legal') echo 'active'; ?>" href="/jfmestates-dev/about">About</a>
					</li>
					<li class="nav-item px-1">
						<a class="nav-link <?php if($highlight=='testimonials' && $highlight!='legal') echo 'active'; ?>" href="/jfmestates-dev/testimonials">Testimonials</a>
					</li> 
					<li class="nav-item px-1">
						<a class="nav-link <?php if($highlight=='bulletin' && $highlight!='legal') echo 'active'; ?>" href="/jfmestates-dev/bulletin">Bulletin</a>
					</li>   
					<li class="nav-item px-1">
						<a class="nav-link <?php if($highlight=='contact' && $highlight!='legal') echo 'active'; ?>" href="/jfmestates-dev/contact">Contact Us</a>
					</li>    
				</ul>
			</div>  
		</div>
	</nav>

	<br>