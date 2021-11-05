<?php
require('controller/controller.php');

if (isset($_GET['action'])) {
	if ($_GET['action'] == 'shop') {
		shop();
	}
	elseif ($_GET['action'] == 'profile') {
		profile();
	}
	elseif ($_GET['action'] == 'login') {
		login();
	}
	elseif ($_GET['action'] == 'detail') {
		if (isset($_GET['id']) && $_GET['id'] > 0) {
            detail();
        }
        else {
            echo 'Erreur : aucun identifiant de produit envoyé';
        }
	}
	else {
		signup();
	}
}
else {
	index();
}
?>