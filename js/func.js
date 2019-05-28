let prev = document.getElementById("prev");
let next = document.getElementById("next");
let slides = document.getElementsByClassName("slide");
let currentImg = 0;




// ...............................




function ready() {
	if (slides.length >= 2) {
		prev.classList.remove("opacity0");
		next.classList.remove("opacity0");
	} 
}

document.addEventListener("DOMContentLoaded", ready);

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









