<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>socksDesign</title>
	<link rel="stylesheet" href="styles/style.css" type="text/css">
	<link rel="stylesheet" href="styles/mobile_menu.css" type="text/css">
	<link rel="shortcut icon" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
		<a href="/index.php" class="link-style-fix">
			<div class="logo">
				<img src="images/main/logo.png" alt="Логотип">
				<span>Big Bang Socks</span>
			</div>
		</a>
		<nav class="standart_menu">
			<ul>
				<li><a href="/index.php">Главная</a></li>
				<span>/</span>
				<li><a href="/index.php?page=shop">Магазин</a></li>
				<span>/</span>
				<li><a href="/index.php?page=delivery">Доставка</a></li>
				<span>/</span>
				<li><a href="/index.php?page=pay">Оплата</a></li>
			</ul>
		</nav>
		<div class="display-none">
			<button class="menu-toggle"></button>
			<nav class="mobile_menu">
			  <ul class="menu">
			    <li data-text="Главная">Главная</li>
			    <li data-text="Магазин">Магазин</li>
			    <li data-text="Доставка">Доставка</li>
			    <li data-text="Оплата">Оплата</li>
			  </ul>
			</nav>
		</div>
	</header>

	<?php include('./func.php') ?>

	<footer>
		<div>BBSocks</div>
		<div>
			<span>+5 666 777 88 99</span>
			<br>
			<ul>
				<li><a href="/index.php?page=delivery">Доставка</a></li>
				<span>/</span>
				<li><a href="/index.php?page=pay">Оплата</a></li>
				<span>/</span>
				<li><a href="#">Возврат</a></li>
			</ul>
		</div>
		<div>
			<p><a href="#">Политика конфиденциальности</a></p>
			<p><a href="#">avisrara74@gmail.com</a></p>
			<p>SocksDesign, 2019</p>
		</div>
	</footer>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>
</html>