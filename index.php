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
	else {
		signup();
	}
}
else {
	index();
}
?>