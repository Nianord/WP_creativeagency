//search
$(document).ready(function() {
	$('.search__img').click(function(event) {
		$('.search__form').toggleClass('active');
	});
});

//burger
$(document).ready(function() {
	$('.menu__burger').click(function(event) {
		$('.menu__burger, .menu__list').toggleClass('active');
		$('body').toggleClass('lock');
	});
});

//ibg
function ibg(){
let ibg=document.querySelectorAll(".ibg"); for (var i = 0; i < ibg.length; i++) { if(ibg[i].querySelector('img')){ ibg[i].style.backgroundImage = 'url('+ibg[i].querySelector('img').getAttribute('src')+')'; } }
}
ibg();

//slider
let myImageSlider = new Swiper('.slider', {
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
		scrollbar: {
			el: '.swiper-scrollbar',
			draggable: true,
		},
	},
	keyboard: {
		enabled: true,
		onlyInViewport: true,
		pageUpDown: true,
	},
	slidesPerView: 'auto',
	watchOverflow: true,
	spaceBetween: 20,
	loop: true,
	effect: 'slide',
	centeredSlides: true,
});