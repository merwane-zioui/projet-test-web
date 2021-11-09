<?php

class User {
	public string $name;
	public string $surname;
	public string $email;
	public string $mdp;

	public function __construct(string $name, string $surname, string $email, string $mdp) {
		$this->name = $name;
		$this->surname = $surname;
		$this->email = $email;
		$this->mdp = $mdp;
	}

	public function addUser() {
		$connexion=connect_db();

		$query = "INSERT INTO users (mdp,prenom,email,nom) VALUES (AES_ENCRYPT('$this->mdp', 'cledusite1234'), '$this->name', '$this->email', '$this->surname')";
		$connexion->query($query);
	}

	/*public function getUser() {
		$connexion = connect_db();

		$mail = $connexion->real_escape_string($this->mail);
		$mdp = $connexion->real_escape_string($this->mdp);

		$query = "SELECT * FROM users WHERE mdp=AES_ENCRYPT('$mdp', 'cledusite1234') AND email='$mail'";
		$sql = mysqli_query($connexion,$query) or die (mysqli_error($connexion));

		if(mysqli_num_rows($sql) == 1) {
			$recup_id = mysqli_fetch_object($sql);
			$id = $recup_id->id;
			$_SESSION['id'] = $id;
			return true;
		}
		else{
			return false;
		}
	}*/
}

?>