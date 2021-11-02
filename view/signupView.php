<?php ob_start(); ?>

<h1>Sign up</h1>
<form>
	<div class="form-floating mb-3">
		<input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
		<label for="floatingInput">Email address</label>
	</div>
	<div class="form-floating mb-3">
		<input type="name" class="form-control" id="floatingName" name="name" placeholder="Your name">
		<label for="floatingName">Your name</label>
	</div>
	<div class="form-floating mb-3">
		<input type="name" class="form-control" id="floatingSurname" name="surname" placeholder="Your surname">
		<label for="floatingSurname">Your surname</label>
	</div>
	<div class="form-floating mb-3">
		<input type="password" class="form-control" id="floatingPassword" name="mdp" placeholder="Password">
		<label for="floatingPassword">Password</label>
	</div>
	<div class="form-floating mb-3">
		<input type="password" class="form-control" id="floatingPasswordConf" name="mdpconf" placeholder="Confirm Password">
		<label for="floatingPasswordConf">Confirm Password</label>
	</div>
	<input class="btn btn-light" name="ok" value="Se connecter"/>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>