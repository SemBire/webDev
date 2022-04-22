<!DOCTYPE html>
<html lang="en">

<head>
	<title>Easy Recipes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha-long-hash_code" crossorigin="anonymous">
	<!-- internal css -->
	<link rel="stylesheet" href="index.css">
	<!-- favicon -->
	<link rel="icon" type="images/logo.png" sizes="32x32" href="images/logo.png">
</head>

<body>

	<!-- <?php print $headerImg; ?> -->
	<header class="hero">
		<!-- <h1 class="banner">Easy Recipies</h1> -->
	</header>

	<nav class="navbar navbar-expand-sm navbar-dark sticky-top">
		<div class="container-fluid">
			<img  class="navbar-brand" src="images/logo.png" id="logo" alt="Page Logo" width="50" height="50">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="myNav">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" id="color-teal" aria-current="page" href="index.php">Easy Recipes</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="profile.php">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="recipes.php">Recipes </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="recipes.php">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contactus.php">Contact us</a>
					</li>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button id="button" class="btn btn-outline-primary btn-sm" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>

	<?php print $pageContent; ?>

	<footer class="container-fluid">
		<?php print $loginButton ?>
		<a href="register.php" class=> Subscribe in our Recipes WebSite </a>
		<hr>
		<p> Developed by Yordin Kirk, Semhar Bire, Damaris Gonzalez</p>
		<a href="https://www.youtube.com/" class="btn"><span class="fab fa-youtube-square" id="YouTube1"></span></a>
		<a href="https://www.instagram.com/" class="btn"><span class="fab fa-instagram" id="Pinterest1"></span></a>
		<a href="https://www.pinterest.com/" class="btn"><span class="fab fa-pinterest-square" id="Instagram1"></span></a>
		<a href="https://www.twitter.com/" class="btn"><span class="fab fa-twitter-square" id="Twitter1"></span></a>
		<p>© BHC Web Dev 2022</p>
	</footer>

</body>

</html>