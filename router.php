<?php

require_once('controller/controller.php');

class Router {

	function run() {
		if (isset($_GET['action'])) {
			if ($_GET['action'] === 'shop') {
				shop();
			}
			elseif ($_GET['action'] === 'profile') {
				profile();
			}
			elseif ($_GET['action'] === 'login') {
				login();
			}
			elseif ($_GET['action'] === 'detail') {
				if (isset($_GET['id']) && $_GET['id'] > 0) {
					detail();
				}
				else {
					echo 'Erreur : aucun identifiant de produit envoyé';
				}
			}
			elseif ($_GET['action'] === 'signup') {
				signup();
			}
			else {
				echo 'Erreur : page non définie';
			}
		}
		else {
			index();
		}
	}

}

?>