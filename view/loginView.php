<?php ob_start(); ?>

<h1>Sign in</h1>
<form>			
	<div class="row">
		<div class="col-sm-12">
			<label for="adressemail">Adresse mail</label>
			<input class="form-control" type="email" name="adressemail" placeholder="Entrez une adresse mail" autocomplete="email"/>
		</div>
	</div>
		
	<div class="row">
		<div class="col-sm-12">
			<label for="mdp">Mot de passe</label>
			<input class="form-control" type="password" name="mdp" placeholder="Mot de passe" autocomplete="off"/>
			<small class="form-text text-muted">Nous ne partagerons pas votre mot de passe.</small>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<input class="btn btn-light" name="ok" value="Se connecter"/>
		</div>
	</div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
