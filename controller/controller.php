<?php

require('./model/model.php');

function index() {
	require('./view/indexView.php');
}

function shop() {
	$products = getProducts();
	require('./view/shopView.php');
}

function profile() {
	require('./view/profileView.php');
}

function login() {
	require('./view/loginView.php');
}

function signup() {
	require('./view/signupView.php');
}

function detail() {
	$product = getProduct();
	require('./view/detailView.php');
}