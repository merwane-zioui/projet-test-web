<?php

session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="./public/css/bootstrap.css"/>
		<script type="text/javascript" src="./public/js/bootstrap.bundle.js"></script>
	</head>

	<body>

		<header>
			<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4" id="header">
				<a class="navbar-brand ms-3" href="">
					<img src="" alt="CTAstro" height="40">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#barre" aria-controls="barre" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-collapse collapse" id="barre">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="./index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./index.php?action=shop">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./index.php?action=profile">Profile</a>
						</li>
					</ul>

					<?php
					if(isset($_SESSION['id'])) {
					?>
						<a class="text-light me-2">Hello !</a>
						<a class="btn btn-outline-light nav-link me-2" href="">Sign out</a>
					<?php
					}
					else {
					?>
						<a class="btn btn-outline-light nav-link me-2" href="./index.php?action=login">Sign in</a>
						<a class="btn btn-outline-light nav-link me-2" href="./index.php?action=signup">Sign up</a>
					<?php
					}
					?>
					
				</div>
			</nav>
		</header>

		<main>
			<div class="container">
				<?= $content ?>
			</div>
		</main>
	</body>
</html>