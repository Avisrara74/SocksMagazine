let shopBasket = {};
let addToBasket = document.getElementById("addToBasket");
let price = document.getElementsByClassName("price");
let deliveryPrice = document.getElementsByClassName("deliveryPrice");


window.onload = function() {
	let test = document.getElementById("result");
	$.ajax ({
	url: "forAjax.php",
	method: "POST",
	data: { shopBasket : JSON.stringify(shopBasket) },
	success: function(data) {
		
	}
});
}



checkBasket();



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