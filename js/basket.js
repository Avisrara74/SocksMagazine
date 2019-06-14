let shopBasket = {}
let addToBasket = document.getElementById("addToBasket");
let price = document.getElementsByClassName("price");
let deliveryPrice = document.getElementsByClassName("deliveryPrice");


checkBasket();
window.onload = function() {
	$.ajax ({
	url: "forAjax.php",
	method: "POST",
	data: { shopBasket : JSON.stringify(shopBasket) },
	success: function(data) {
	}
});
}

function checkBasket() {
	// if have items in localstorage put them in shopBasket
	if (localStorage.getItem('shopBasket') != null) {
		shopBasket = JSON.parse(localStorage.getItem('shopBasket'));
	}
}

function getFullPrice() {
	let fullPrice = 0;
	for (let i = 0; i <= price.length - 1; i++) {
		fullPrice = fullPrice + parseInt(price[i].innerText, 10);
	}	
	document.write(fullPrice);
}