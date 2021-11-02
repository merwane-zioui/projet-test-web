<?php ob_start(); ?>

<h1>Sign in</h1>
<div class="d-flex justify-content-center bg-light rounded p-5">
	<form method="POST">
		<div class="form-floating mb-3">
			<label for="id_username">Username</label>
		</div>
		<div class="form-floating mb-3">
			<label for="id_password">Password</label>
		</div>
		<button class="btn btn-primary col-auto" type="submit">Sign in</button>
		<a href="">No account ? Sign up now</a>
	</form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
