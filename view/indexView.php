<?php ob_start(); ?>

<div class="bg-light p-5 rounded text-center">
	<h1>Welcome to shop</h1>
	<p class="lead">Lorem ipsum...</p>
	<a class="btn btn-primary" href="" role="button">Lorem ipsum »</a><br>
	<img src="" class="img-fluid m-3" alt="CTAstro" width="300">
	<img src="" class="img-fluid m-3" alt="Observatory Logo" width="300">
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>