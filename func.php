<?php

// easy to read vardump
function vardump ($var) {
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

$page = $_GET['page'];
	if (!isset($page)) {
		require('main.php');
	} elseif ($page == 'shop') {
		require('shop.php');
	} elseif ($page == 'delivery') {
		require('delivery.php');
	} elseif ($page == 'pay') {
		require('pay.php');
	} elseif ($page == 'openItem') {
		require('openItem.php');
	} elseif ($page == 'shopBasket') {
		require('shopBasket.php');
	}

	  elseif ($page == 'Наборы носков') {
		require('someCategory.php');
	} elseif ($page == 'Носки стандартной длинны') {
		require('someCategory.php');
	} elseif ($page == 'Укороченные носки') {
		require('someCategory.php');
	} elseif ($page == 'Утепленные носки') {
		require('someCategory.php');
	} elseif ($page == 'Спортивные носки') {
		require('someCategory.php');
	} elseif ($page == 'Подарочные коробки') {
		require('someCategory.php');
	}


// get nav-items
function GET_navSomeProducts ($nav) {
	global $connection;
	$sql = "SELECT product.id, images.way, product.title, product.price_rub 
		FROM product
		INNER JOIN nav ON product.id_nav = nav.id
		INNER JOIN images ON images.id_product = product.id WHERE '$nav' = nav.navName GROUP BY images.id_product";
	$result = mysqli_query($connection, $sql);
	$navSomeProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $navSomeProducts; 
}

?>