<main class="openItem">
	<?php 
		$nav = $_GET['page'];
		$openItem = GET_openItem($nav);
	?>
	<div class="openItemWrap">
		<div class="imagesWrap">
			<div class="mainImg">
				<div href="#" class="btn-arrow-left opacity0" id="prev">&#10094</div>
				<div>
					<?php foreach($openItem as $openItems): ?> 
						<img src="<?php echo $openItems['way'] ?>" alt="" class="slide displayNone">
					<?php endforeach; ?>
				</div>
				<div href="#" class="btn-arrow-right opacity0" id="next">&#10095</div>
			</div>
		</div>
		<div class="infoWrap">
			<p><?php echo $openItem[0]['title'] ?></p>
			<p><?php echo $openItem[0]['price_rub'] ?>,00 р.</p>
			<form action="/index.php?page=shopBasket" method="POST">
			<br>
				<span>Количество:</span>
				<input type="number" value="1" min="1" max="<?php echo $openItem[0]['items'] ?>" class="num_count">
				<input type="submit" id="addToBasket" value="Добавить в корзину" data-art="<?php echo $openItem[0]['id'] ?>" class="bug_button">
			</form>
		</div>
		<div class="alsoLike">
			<div>
				<a href="#">
					<img src="images/shop/items/1-1.jpg" alt="" class="increase_big increase">
					<p>Название</p>
					<p>2500.00р</p>
				</a>
			</div>
			<div>
				<a href="#">
					<img src="images/shop/items/2-1.jpg" alt="" class="increase_big increase">
					<p>Название</p>
					<p>2500.00р</p>
				</a>
			</div>
			<div>
				<a href="#">
					<img src="images/shop/items/3-1.jpg" alt="" class="increase_big increase">
					<p>Название</p>
					<p>2500.00р</p>
				</a>
			</div>
		</div>
	</div>
	<div class="alsoLikeMobile">
		<h1 class="alsoLikeMobileText">Вам может понравиться: </h3>
		<div class="alsoLikeMobileItems">
			<div>
				<a href="#">
					<img src="images/shop/items/1-1.jpg" alt="" class="increase_big increase">
					<p>Название</p>
					<p>2500.00р</p>
				</a>
			</div>
			<div>
				<a href="#">
					<img src="images/shop/items/2-1.jpg" alt="" class="increase_big increase">
					<p>Название</p>
					<p>2500.00р</p>
				</a>
			</div>
			<div>
				<a href="#">
					<img src="images/shop/items/3-1.jpg" alt="" class="increase_big increase">
					<p>Название</p>
					<p>2500.00р</p>
				</a>
			</div>
			<div>
				<a href="#">
					<img src="images/shop/items/1-1.jpg" alt="" class="increase_big increase">
					<p>Название</p>
					<p>2500.00р</p>
				</a>
			</div>
			<div>
				<a href="#">
					<img src="images/shop/items/2-1.jpg" alt="" class="increase_big increase">
					<p>Название</p>
					<p>2500.00р</p>
				</a>
			</div>
			<div>
				<a href="#">
					<img src="images/shop/items/3-1.jpg" alt="" class="increase_big increase">
					<p>Название</p>
					<p>2500.00р</p>
				</a>
			</div>
		</div>
	</div>
	<div class="bottomButtons">
		<a href="/index.php?page=search" class="searchLink"><div class="searchButton"><img src="/images/shop/search.png" title="Поиск"><p>Поиск</p></div></a>
		<a href="#" class="basketLink"><div class="basketButton"><img src="/images/shop/shop-basket.png" title="Корзина"><p>Корзина</p></div></a>
	</div>
	<script  src="js/func.js"></script>
</main>
