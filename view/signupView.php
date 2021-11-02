<?php ob_start(); ?>

<h1>Sign up</h1>
<div class="d-flex justify-content-center bg-light rounded p-5">
	<form method="POST">
		<div class="form-floating mb-3">
			<div class='form-text'></div>
			<p style="color:red"></p>
		</div>
		<button class="btn btn-primary col-auto" type="submit">Sign up</button>
		<a href="">Already have an account ? Sign in</a>
	</form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>