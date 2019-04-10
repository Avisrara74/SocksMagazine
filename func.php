<?php

$page = $_GET['page'];
	if (!isset($page)) {
		require('main.php');
	} elseif ($page == 'shop') {
		require('shop.php');
	} elseif ($page == 'delivery') {
		require('delivery.php');
	} elseif ($page == 'about') {
		require('about.php');
	} elseif ($page == 'pay') {
		require('pay.php');
	}

?>