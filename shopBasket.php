<?php include('./forAjax.php');?>
<script  src="js/basket.js"></script>
<main class="shopBasket">
	<p> Не забудьте добавить <a href="">коробочку</a>, чтобы красиво упаковать ваши покупки</p>
	<script type="text/javascript">
		
	</script>
    <p id="result"></p>
	
	<div class="shopBasketContentWrap">
		<div class="basketLeftContent">
			<div class="basketContentWrap">
				<div><h1>Корзина</h1></div>
				<?php
				$test = [5, 6, 7, 8 , 9];
				print_r($_POST);
				/*	$product_id = [1, 2, 3, 4, 5];
					foreach ($product_id as $items) {
						$test = GET_basketItems($items);
						vardump($test);
					}
				*/

				?>
				<div class="basketItemsWrap">
					<div class="basketItem">
						<a href="#">
							<img src="images/shop/items/1-3.jpg" alt="" class="increase_big increase">
						</a>
						<div class="basketItemInfo">
							<div>
								<div>
									<a href="#">
										<h4>Название первых носков</h4>
									</a>
								</div>
								<span class="cross">х</span>	
							</div>
							<h4></h4>
							<div>
								<select name="" id="">
									<option value="">1</option>
								</select>	
								<span>
									<span class="price">123</span><span>,00 р.</span>
								</span>
								
							</div>	
						</div>
					</div>
					<div class="basketItem">
						<a href="#">
							<img src="images/shop/items/2-1.jpg" alt="" class="increase_big increase">
						</a>
						<div class="basketItemInfo">
							<div>
								<div>
									<a href="#">
										<h4>Название вторых носков</h4>
									</a>
								</div>
								<span class="cross">х</span>	
							</div>
							<h4></h4>
							<div>
								<select name="" id="">
									<option value="">1</option>
								</select>	
								<span>
									<span class="price">123</span><span>,00 р.</span>
								</span>
								
							</div>	
						</div>
					</div>
				</div>

				<div class="basketPriceInfo">
					<h4>Итого <span><script> getFullPrice(); </script>,00 р.</span></h4>
					<h4>Доставка <span class="deliveryPrice">Бесплатно</span></h4>
					<h4>Сумма <span><script> getFullPrice(); </script>,00 р.</span></h4>
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
</main>