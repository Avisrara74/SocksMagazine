let shopBasket = {};
let addToBasket = document.getElementById("addToBasket");


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
		out += key + '<br>';
	}
}