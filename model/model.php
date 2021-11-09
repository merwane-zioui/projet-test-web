<?php

function connect_db() :? mysqli {
	$connexion = new mysqli("localhost","root","", "dbsite") or die ("Connexion à  la bd impossible");
	return $connexion;
}

function getProducts() {
	$connexion=connect_db();
	$query = "SELECT productid, brand, name, description, price FROM products ORDER BY productid";
	$sql_products = $connexion->query($query);

	$products = array();
	
	if(mysqli_num_rows($sql_products) > 0) {
		while($product = $sql_products->fetch_array()) {
		$products[] = new Product($product['productid'], $product['brand'], $product['name'], $product['description'], $product['price']);
		}
	}
	return $products;
}

function getProduct() {
	$connexion=connect_db();
	$query = "SELECT * FROM products WHERE productid=".$_GET['id']."";
	$sql_product = $connexion->query($query);

	$product = $sql_product->fetch_array();
	return new Product($product['productid'], $product['brand'], $product['name'], $product['description'], $product['price']);
}

class Product {
	public int $productid;
	public string $brand;
	public string $name;
	public string $description;
	public float $price;

	public function __construct(int $pid, string $pb, string $pn, string $pd, float $pp) {
		$this->productid = $pid;
		$this->brand = $pb;
		$this->name = $pn;
		$this->description = $pd;
		$this->price = $pp;
	}
}

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