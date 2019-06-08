let shopBasket = {};
let addToBasket = document.getElementById("addToBasket");
let price = document.getElementsByClassName("price");
let deliveryPrice = document.getElementsByClassName("deliveryPrice");


checkBasket();

function checkBasket() {
	// if have items in localstorage put them in shopBasket
	if (localStorage.getItem('shopBasket') != null) {
		shopBasket = JSON.parse(localStorage.getItem('shopBasket'));
	}
}

function showShopBasket() {
	let out = '';
	for (let key in shopBasket) {
		out += key + ' ';
	}
	console.log(out);
}

function getFullPrice() {
	let fullPrice = 0;
	for (let i = 0; i <= price.length - 1; i++) {
		fullPrice = fullPrice + parseInt(price[i].innerText, 10);
	}	
	document.write(fullPrice);
}