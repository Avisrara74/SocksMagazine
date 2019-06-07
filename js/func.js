let prev = document.getElementById("prev");
let next = document.getElementById("next");
let slides = document.getElementsByClassName("slide");
let checkbox1 = document.getElementById('checkbox1');
let checkbox2 = document.getElementById('checkbox2');
let num_count = document.getElementsByClassName('num_count');
let currentImg = 0;





					




// ...............................



function ready() {
	if (slides.length >= 2) {
		prev.classList.remove("opacity0");
		next.classList.remove("opacity0");
	} 
	checkBasket();
}

document.addEventListener("DOMContentLoaded", ready);


// first-element fix 
slides[0].classList.remove("displayNone");


function slider() {
	for (let i = 0; i < slides.length; i++) {
		slides[i].classList.add("displayNone");
	}
	slides[currentImg].classList.remove("displayNone");
}



prev.onclick = function() {
	if ( (currentImg - 1) == -1) {
		currentImg = slides.length - 1;
	}
	else {
		currentImg--;
	}
	slider();
};

next.onclick = function() {
	if ( (currentImg + 1) == slides.length) {
		currentImg = 0;
	}
	else {
		currentImg++;
	}
	slider();
};

addToBasket.onclick = function() {
	let articul = $(this).attr('data-art');
	if (shopBasket[articul] != undefined)  {
		shopBasket[articul] += parseInt(num_count[0].value,10);
	} else {
		shopBasket[articul] = parseInt(num_count[0].value,10);
	}
	localStorage.setItem('shopBasket', JSON.stringify(shopBasket));
}









