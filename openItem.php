<main class="openItem">
	<div class="openItemWrap">
		<div class="imagesWrap">
			<div class="mainImg">
				<div href="#" class="btn-arrow-left opacity0" id="prev">&#10094</div>
				<div>
					<img src="images/shop/items/1-1.jpg" alt="" class="slide">
					<img src="images/shop/items/1-2.jpg" alt="" class="slide displayNone">
					<img src="images/shop/items/1-3.jpg" alt="" class="slide displayNone">
					<img src="images/shop/items/1-4.jpg" alt="" class="slide displayNone">
				</div>
				<div href="#" class="btn-arrow-right opacity0" id="next">&#10095</div>
				<script  src="js/func.js"></script>
			</div>
		</div>
		<div class="infoWrap">
			<p>Заголовок</p>
			<p>5000.00р</p>
			<p>Выберите размер</p>
			<label class="check option">
				<input class="check__input" type="checkbox">
				<span class="check__box"></span>
				35-39
			</label>
			<label class="check option">
				<input class="check__input" type="checkbox">
				<span class="check__box"></span>
				40-44
			</label>
			<br>
			<form action="/index.php?page=shopBasket" method="POST">
				<span>Количество:</span>
				<input type="number" value="1" class="num_count">
				<input type="submit" value="Добавить в корзину" class="bug_button">
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
</main>
