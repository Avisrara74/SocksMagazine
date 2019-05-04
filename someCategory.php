<main class="categoryMain">
	<h1>Какой-то заголовок</h1>
	<div class="categoryItems">
		<?php for ($i=0; $i <= 7; $i++) { 
		echo '
		<a href="#">
		<div>
			<div class="imgWrap">
				<img src="images/shop/items/1.jpg" alt="" class="increase_big">
			</div>
			<p>Тестовый какой то текст</p>
			<p>260,00 р.</p>
			<div class="buttonWrap">
				<button class="categoryElement">В корзину </button>
			</div>
		</div>
		</a>	';
		} ?>
		

	</div>
	<div class="bottomButtons">
		<a href="/index.php?page=search" class="searchLink"><div class="searchButton"><img src="/images/shop/search.png" title="Поиск"><p>Поиск</p></div></a>
		<a href="#" class="basketLink"><div class="basketButton"><img src="/images/shop/shop-basket.png" title="Корзина"><p>Корзина</p></div></a>
	</div>
</main>