<?php

function getProducts() {
	$connexion=mysqli_connect("localhost","root","");
	$ok=mysqli_select_db($connexion, "dbsite") or die ("Connexion à  la bd impossible");
	$query = "SELECT productid, brand, name, description, price FROM products ORDER BY productid";
	$sql_products = mysqli_query($connexion,$query)  or die(mysqli_error($connexion));

	$products = array();
	
	if(mysqli_num_rows($sql_products) > 0) {
		while($product = $sql_products->fetch_array()) {
		$products[] = $product;
		}
	}
	return $products;
}

function getProduct() {
	$connexion=mysqli_connect("localhost","root","");
	$ok=mysqli_select_db($connexion, "dbsite") or die ("Connexion à  la bd impossible");
	$query = "SELECT * FROM products WHERE productid=".$_GET['id']."";
	$sql_product = mysqli_query($connexion,$query)  or die(mysqli_error($connexion));

	$product = $sql_product->fetch_array();
	return $product;
}

?>