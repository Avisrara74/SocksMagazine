<main class="categoryMain">
	<?php 
		$nav = $_GET['page'];
		$navItem = GET_navSomeProducts($nav);
	?>
	<h1><?php echo $nav ?></h1>
	<div class="categoryItems">
		<?php 
		foreach ($navItem as $navItems): ?>
		<a href="index.php?page=<?php echo $navItems['id'] ?>">
		<div>
			<div class="imgWrap">
				<img src="<?php echo $navItems['way'] ?>" alt="" class="increase_middle increase">
			</div>
			<p><?php echo $navItems['title'] ?></p>
			<p><?php echo $navItems['price_rub'] ?>,00 руб.</p>
			<div class="buttonWrap">
				<button class="categoryElement">В корзину </button>
			</div>
		</div>
		</a>	
		<?php endforeach; ?>
	</div>
	<div class="bottomButtons">
		<a href="/index.php?page=shopBasket" class="basketLink"><div class="basketButton"><img src="/images/shop/shop-basket.png" title="Корзина"><p>Корзина</p></div></a>
	</div>
</main>