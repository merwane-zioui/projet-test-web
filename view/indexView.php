<?php ob_start(); ?>

<div class="bg-light p-5 rounded text-center">
	<h1>Welcome to SneakShop</h1>
	<p class="lead">Lorem ipsum...</p>
	<a class="btn btn-primary" href="" role="button">Lorem ipsum »</a><br>
	<img src="" class="img-fluid m-3" alt="SneakShop Logo" width="300">
	<img src="" class="img-fluid m-3" alt="Trusted Shop Logo" width="300">
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>