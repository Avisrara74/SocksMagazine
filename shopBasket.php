<script  src="js/basket.js"></script>
<main class="shopBasket">
	<p> Не забудьте добавить <a href="">коробочку</a>, чтобы красиво упаковать ваши покупки</p>
	<script type="text/javascript">
		showShopBasket();
	</script>
	<?php
		$arr = [1, 8, 11, 15];
		for ($i = 0; $i <= count($arr); $i++) {
			$test = GET_basketItems($arr[$i]);
		}
	?>
	<div class="shopBasketContentWrap">
		<div class="basketLeftContent">
			<div class="basketContentWrap">
				<div><h1>Корзина</h1></div>

				<div class="basketItemsWrap">
					<div class="basketItem">
						<a href="#">
							<img src="images/shop/items/1-1.jpg" alt="" class="increase_big increase">
						</a>
						<div class="basketItemInfo">
							<div>
								<div>
									<a href="#">
										<h4>Тут название наших любимых носков</h4>
									</a>
								</div>
								<span class="cross">&times;</span>	
							</div>
							<h4></h4>
							<div>
								<select name="" id="">
									<option value="">1</option>
									<option value="">2</option>
									<option value="">3</option>
									<option value="">4</option>
									<option value="">5</option>
								</select>	
								<span>2 000,00 р.</span>
							</div>	
						</div>
					</div>

					<div class="basketItem">
						<a href="#">
							<img src="images/shop/items/1-2.jpg" alt="" class="increase_big increase">
						</a>
						<div class="basketItemInfo">
							<div>
								<div>
									<a href="#">
										<h4>Тут название наших любимых носков</h4>
									</a>
								</div>
								<span class="cross">&times;</span>	
							</div>
							<h4></h4>
							<div>
								<select name="" id="">
									<option value="">1</option>
									<option value="">2</option>
									<option value="">3</option>
									<option value="">4</option>
									<option value="">5</option>
								</select>	
								<span>2 000,00 р.</span>
							</div>	
						</div>
					</div>
				</div>

				<div class="basketPriceInfo">
					<h4>Итого <span>2 000,00 р.</span></h4>
					<h4>Доставка <span>Бесплатно</span></h4>
					<h4>Сумма <span>2 000,00 р.</span></h4>
					<h4>Что-то не нашли? <a href="#">Продолжить покупки</a></h4>
				</div>

			</div>
		</div>

		<div class="basketRightContent">
			<div>
				<h1>Проверка</h1>
				<p>Введите ваш email. На этот email вы будете получать уведомления об обновлении статуса товара </p>
				<input type="text" class="printEmail" placeholder="Введите ваш Email">
				<label class="check option">
					<input class="check__input" type="checkbox">
					<span class="check__box"></span>
					Я согласен с 
					<a href="">Как мне вернуть товар?</a>, 
					<a href="">Условия доставки и оплаты</a>, 
					<a href="">Политика конфиденциальности</a>
				</label>
				<input type="button" value="Подтвердить" class="bug_button">
			</div>
			<div>
				<div><h2>Следующие этапы</h2></div>
				<div>
					<p>Варианты доставки:</p>
					<p>Выберите способ получения вашего заказа.</p>
				</div>
				<div>
					<p>Платежная информация:</p>
					<p>Выберите способ оплаты и введите свои платежные данные.</p>
				</div>
				<div>
					<p>Подтверждение заказа:</p>
					<p>Выберите свой заказ и получите подтверждение по email.</p>
				</div>
			</div>
			
		</div>
	</div>
		

		
	</div>
	<div class="bottomButtons">
		<a href="/index.php?page=search" class="searchLink"><div class="searchButton"><img src="/images/shop/search.png" title="Поиск"><p>Поиск</p></div></a>
		<a href="#" class="basketLink"><div class="basketButton"><img src="/images/shop/shop-basket.png" title="Корзина"><p>Корзина</p></div></a>
	</div>
</main>