<?php

include('model.php');

$nom=htmlspecialchars($_REQUEST['surname']);
$prenom=htmlspecialchars($_REQUEST['name']);
$mail=htmlspecialchars($_REQUEST['adressemail']);
$mdp=htmlspecialchars($_REQUEST['mdp']);

$connexion=mysqli_connect("localhost","root","");
$ok=mysqli_select_db($connexion, "bdprojet") or die ("Connexion à  la bd impossible");

$query_user = "SELECT * FROM users WHERE email='$mail'";
$sql_user = mysqli_query($connexion, $query_user) or die (mysqli_error($connexion));

$query = "INSERT INTO users (mdp,prenom,email,nom) VALUES (AES_ENCRYPT('$mdp', 'cledusite1234'), '$prenom', '$mail', '$nom')";

if(mysqli_num_rows($sql_user)!=0) {
	echo("alreadyused");
}

else {
	$user = new User($nom, $prenom, $mail, $mdp);
	$user->addUser();
	echo("true");
}
?>