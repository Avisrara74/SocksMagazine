<?php 
	session_start();

	$shopBasketItem = json_decode($_POST['item']);
	$_SESSION['item'] = $shopBasketItem;
?>