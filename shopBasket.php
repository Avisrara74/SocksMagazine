<?php session_start(); ?>
<script src="js/basket.js"></script>
<main class="shopBasket">
	<p> Не забудьте добавить <a href="">коробочку</a>, чтобы красиво упаковать ваши покупки</p>
	<div class="shopBasketContentWrap">
		<?php
			$shopBasketKeys = $_SESSION['shopBasket'];
		?>
		<div id="block" class="basketLeftContent">
			<div class="basketContentWrap">
				<div><h1>Корзина</h1></div>	
				<div class="basketItemsWrap">
					<?php 
						foreach ($shopBasketKeys as $shopBasketKey => $value):
						$shopBasketItem = GET_basketItems($shopBasketKey);
					?>
					<div class="basketItem">
						<a href="#">
							<img src="<?php echo $shopBasketItem[0]['way'] ?>" alt="" class="increase_big increase">
						</a>
						<div class="basketItemInfo">
							<div>
								<div>
									<a href="index.php?page=<?php echo $shopBasketItem[0]['id'] ?>">
										<h4><?php echo $shopBasketItem[0]['title'] ?></h4>
									</a>
								</div>
								<!-- need fix this dirty code -->
								<span class="cross" data-art="<?php echo $shopBasketItem[0]['id'] ?>" 
								onclick="
									let articul = $(this).attr('data-art');
									delete shopBasket[articul];
									localStorage.setItem('shopBasket', JSON.stringify(shopBasket));
								">х</span>	
							</div>
							
							<div>
								<select data-art="<?php echo $shopBasketItem[0]['id'] ?>" class="testFunc" onchange="readSelectValue();">
									<option><?php echo $value ?></option>
									<?php for ($i = 1; $i <= $shopBasketItem[0]['items']; $i++) {?> 
										<option class="optionValue" value="<?php echo $i ?>"><?php echo $i ?></option>
								<?php	} ?>
								</select>	
								<script>
									function readSelectValue() {
										let item = parseInt(this.$("testFunc").context.activeElement.value);
									//	let priceItem = document.getElementsByClassName("price");
									//	console.log(priceItem[0].innerHTML = standartPrice * item);
										let articul = this.$("price").context.activeElement.dataset.art;
										shopBasket[articul] = item;
										localStorage.setItem('shopBasket', JSON.stringify(shopBasket));	
										window.location.reload();
									} 
								</script>
								<span>
									<span class="price" data-art="<?php echo $shopBasketItem[0]['id'] ?>">
										<script>document.write(<?php echo $shopBasketItem[0]['price_rub']; ?> * <?php echo $value ?>);</script></span><span>,00 р.</span>
								</span>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>

				<div class="basketPriceInfo">
					<h4>Итого <span class="getFullPrice"><script> getFullPrice(); </script>,00 р.</span></h4>
					<h4>Доставка <span class="deliveryPrice">Бесплатно</span></h4>
					<h4>Сумма <span class="getFullPrice"><script> getFullPrice(); </script>,00 р.</span></h4>
					<h4>Что-то не нашли? <a href="index.php?page=shop">Продолжить покупки</a></h4>
				</div>

			</div>
		</div>

		<div class="basketRightContent">
			<div>
				<h1>Проверка</h1>
				<p>Введите ваш номер телефона. На этот номер вы будете получать уведомления об обновлении статуса товара </p>
				<input type="text" class="printEmail" placeholder="Введите ваш номер телефона">
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
					<p>Выберите свой заказ и получите подтверждение на номер телефона.</p>
				</div>
			</div>
			
		</div>
	</div>
		

		
	</div>
</main>


<?php session_destroy(); ?>