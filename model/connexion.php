<?php

require_once('model.php');

session_start();

$myarray = &$_POST;

$mail=htmlspecialchars($myarray['adressemail']);
$mdp=htmlspecialchars($myarray['mdp']);

unset($_SESSION['id']);

/*$user = new User("", "", $mail, $mdp);
if($user->getUser()) {
	echo("true");
}
else {
	echo("false");
}*/

$connexion=mysqli_connect("localhost","root","");
$ok=mysqli_select_db($connexion, "dbsite") or die ("Connexion à  la bd impossible");

$mail = $connexion->real_escape_string($mail);
$mdp = $connexion->real_escape_string($mdp);
$query = "SELECT * FROM users WHERE mdp=AES_ENCRYPT('$mdp', 'cledusite1234') AND email='$mail'";
$sql = mysqli_query($connexion,$query) or die (mysqli_error($connexion));

if(mysqli_num_rows($sql) == 1) {
	$recup_id = mysqli_fetch_object($sql);
	$id = $recup_id->id;
	$_SESSION['id'] = $id;
	echo("true");
}
else{
	echo("false");
}

?>