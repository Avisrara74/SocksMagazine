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
				<script  src="js/func.js"></script>
			</div>
		</div>
		<div class="infoWrap">
			<p><?php echo $openItem[0]['title'] ?></p>
			<p><?php echo $openItem[0]['price_rub'] ?>,00 р.</p>
			<?php  
			if (($openItem[0]["35_39_counter"] <= 0) and ($openItem[0]["40_44_counter"] <= 0)) {
				echo '<p>Товара нет в наличии</p>';
			}
			else if (($openItem[0]["35_39_counter"] >= 1) and ($openItem[0]["40_44_counter"] >= 1)) {
				echo '
					<p>Выберите размер</p>
					<label class="check option">
						<input class="check__input" type="radio" name="socksSize" id="checkbox1">
						<span class="check__box"></span>
						35-39
					</label>
					<label class="check option">
						<input class="check__input" type="radio" name="socksSize" id="checkbox2">
						<span class="check__box"></span>
						40-44
					</label>
				';
			}
			else if($openItem[0]["35_39_counter"] >= 1) {
				echo '
					<p>Выберите размер</p>
					<label class="check option">
						<input class="check__input" type="radio" name="socksSize" id="checkbox1">
						<span class="check__box"></span>
						35-39
					</label>
				';
			}
			else if($openItem[0]["40_44_counter"] >= 1) {
				echo '
					<p>Выберите размер</p>
					<label class="check option">
						<input class="check__input" type="radio" name="socksSize" id="checkbox2">
						<span class="check__box"></span>
						40-44
					</label>
				';
			}
			?>
			<br>
			<form action="/index.php?page=shopBasket" method="POST">
				<span>Количество:</span>
				<script>
					let checkbox1 = document.getElementById('checkbox1');
					let checkbox2 = document.getElementById('checkbox2');
					let num_count = document.getElementsByClassName('num_count');
					

					checkbox1.onclick = function checkboxChecked1() {
						<?php $test = $openItem[0]["35_39_counter"]; ?>;
						num_count[0].setAttribute("max", <?php echo $test ?>);
						if (num_count[0].value > <?php echo $test ?>) {
							num_count[0].value = '<?php echo $test ?>';
						}

					}
					checkbox2.onclick = function checkboxChecked2() {
						<?php $test = $openItem[0]["40_44_counter"]; ?>;
						num_count[0].setAttribute("max", <?php echo $test ?>);
						if (num_count[0].value > <?php echo $test ?>) {
							num_count[0].value = '<?php echo $test ?>';
						}
					}
					
				</script>
				<input type="number" value="1" min="1" max="10" class="num_count">
				
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
