<?php

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

?>