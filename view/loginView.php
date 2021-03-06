<?php ob_start(); ?>

<h2 class="pb-2 border-bottom">Sign in</h2>
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

<script type="text/javascript" src="./public/js/connexion.js"></script>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
