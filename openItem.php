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
			<?php  
			if (($openItem[0]["35_39_counter"] <= 0) and ($openItem[0]["40_44_counter"] <= 0)) {
				echo '<p>Товара нет в наличии</p>';
			}
			else if (($openItem[0]["35_39_counter"] >= 1) and ($openItem[0]["40_44_counter"] >= 1)) {
				echo '
					<p>Выберите размер:</p>
					<br>
					<label class="check option">
						<input class="check__input" data-art="35_39_counter" type="radio" required name="socksSize" id="checkbox1">
						<span class="check__box"></span>
						35-39
					</label>
					<label class="check option">
						<input class="check__input" data-art="40_44_counter" type="radio" required name="socksSize" id="checkbox2">
						<span class="check__box"></span>
						40-44
					</label>
				';
			}
			else if($openItem[0]["35_39_counter"] >= 1) {
				echo '
					<p>Выберите размер:</p>
					<br>
					<label class="check option">
						<input class="check__input" data-art="35_39_counter" type="radio" required name="socksSize" id="checkbox1">
						<span class="check__box"></span>
						35-39
					</label>
				';
			}
			else if($openItem[0]["40_44_counter"] >= 1) {
				echo '
					<p>Выберите размер:</p>
					<br>
					<label class="check option">
						<input class="check__input" data-art="40_44_counter" type="radio" required name="socksSize" id="checkbox2">
						<span class="check__box"></span>
						40-44
					</label>
				';
			}
			?>
			<br>
				<span>Количество:</span>
				<script>
					
					// change "max" on input counter
					checkbox1.onclick = function checkboxChecked1() {
						<?php $basketItemCount = $openItem[0]["35_39_counter"]; ?>;
						num_count[0].setAttribute("max", <?php echo $basketItemCount ?>);
						if (num_count[0].value > <?php echo $basketItemCount ?>) {
							num_count[0].value = '<?php echo $basketItemCount ?>';
						}

					}
					checkbox2.onclick = function checkboxChecked2() {
						<?php $basketItemCount = $openItem[0]["40_44_counter"]; ?>;
						num_count[0].setAttribute("max", <?php echo $basketItemCount ?>);
						if (num_count[0].value > <?php echo $basketItemCount ?>) {
							num_count[0].value = '<?php echo $basketItemCount ?>';
						}
					}
					
					
				</script>
				<input type="number" value="1" min="1" max="10" class="num_count">
				<p id="testId" data-art="<?php echo $openItem[0]['id'] ?>">123test</p>
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
