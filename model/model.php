<?php

require_once('product.php');
require_once('user.php');

const SERVER_HOST = "localhost";
const DB_USER = "root";
const DB_PASSWORD = "";
const REQUESTED_DB = "dbsite";

function connect_db() :? mysqli {
	$connexion = new mysqli(SERVER_HOST, DB_USER, DB_PASSWORD, REQUESTED_DB) or die ("Connexion à  la bd impossible");
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

?>