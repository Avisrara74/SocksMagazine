<main class="openItem">
	<?php 
		$nav = $_GET['page'];
		$openItem = GET_openItem($nav);
		$nav_id = $openItem[0]['id_nav'];
		$recomendItem = GET_recomendItems($nav_id);
		shuffle($recomendItem);
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
				<?php 
					if ($openItem[0]['items'] <= 0) {
						$value = 0;
					} else {
						$value = 1;
					}
				?>
				<input type="number" value="<?php echo $value ?>" min="0" max="<?php echo $openItem[0]['items'] ?>" class="num_count">
				<input type="submit" id="addToBasket" value="Добавить в корзину" data-art="<?php echo $openItem[0]['id'] ?>" class="bug_button">
			</form>
		</div>
		<div class="displayNone noHaveIt"><p>Товара нет в наличии</p></div>
		<div class="alsoLike">
			<?php for ($i=0; $i <= count($recomendItem) - 1; $i++) { ?>
				<div>
					<a href="index.php?page=<?php echo $recomendItem[$i]['id'] ?>">
						<img src="<?php echo $recomendItem[$i]['way'] ?>" alt="" class="increase_big increase">
						<p><?php echo $recomendItem[$i]['title'] ?></p>
						<br>
						<p><?php echo $recomendItem[$i]['price_rub'] ?>,00 р.</p>
					</a>
				</div>
				<?php if ($i >= 2) { $i = count($recomendItem) - 1; } ?>
			<?php	} ?>
			
		</div>
	</div>
	<div class="alsoLikeMobile">
		<h1 class="alsoLikeMobileText">Вам может понравиться: </h3>
		<div class="alsoLikeMobileItems">
			<?php for ($i=0; $i <= count($recomendItem) - 1; $i++) { ?>
				<div>
					<a href="index.php?page=<?php echo $recomendItem[$i]['id'] ?>">
						<img src="<?php echo $recomendItem[$i]['way'] ?>" alt="" class="increase_big increase">
						<p><?php echo $recomendItem[$i]['title'] ?></p>
						<br>
						<p><?php echo $recomendItem[$i]['price_rub'] ?>,00 р.</p>
					</a>
				</div>
				<?php if ($i >= 7) { $i = count($recomendItem) - 1; } ?>
			<?php	} ?>
		</div>
	</div>
	<div class="bottomButtons">
		<a href="/index.php?page=shopBasket" class="basketLink"><div class="basketButton"><img src="/images/shop/shop-basket.png" title="Корзина"><p>Корзина</p></div></a>
	</div>
	<script  src="js/func.js"></script>
	<script  src="js/basket.js"></script>
</main>
