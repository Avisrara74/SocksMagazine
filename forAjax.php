<?php 
	session_start();
	$shopBasketObj = json_decode($_POST['shopBasket']);
	$shopBasketArr = (array) $shopBasketObj;
	$_SESSION['shopBasket'] = $shopBasketArr;
?>
