const nav = document.querySelector('#mainNavbar');
const btnMenu = document.querySelector('#menuToggler');

const tl = new TimelineLite({paused:true, reversed:true});

if( screen.width >= 768 ) {
	tl.to(
		'.contact-online', 0.5, {scale:0, x:"60%", ease: Power2.easeOut}
	).fromTo(
		'#navbarDesk', 0.5, {ease: Power2.easeOut, scale:0, x:"60%"},
								{ease: Power2.easeOut,scale:1, x:"0%"},
		'-=0.5'
	)
} else {
	tl.fromTo(
		'#sidebar-menu', 0.5, { x:'100%', ease:Power2.easeOut },
									{ x:'0%', ease: Power2.easeOut }
	)

}

	btnMenu.addEventListener('click', (e) => {
			if( tl.isActive() ) {
			e.preventDefault();
			e.stopImmediatePropagation();
			return false;
		}
			nav.classList.toggle('open');
			toggleTween(tl);
		});
function toggleTween(tween) {
	tween.reversed() ? tween.play() : tween.reverse();
}

// change background navbar on scroll
var scrollpos = window.scrollY;

function add_back() {
	nav.classList.add('bg-color');
}
function remove_back() {
	nav.classList.remove('bg-color');
}
window.addEventListener('scroll', () => {
	scrollpos = window.scrollY;
	if( scrollpos > 200 ) {
		add_back();
	} else {
		remove_back();
	}
	console.log(scrollpos);
});

/**
 *
 *	Sliders
 *
 */

$(document).ready(function() {
	// Slider About Vertical
	var sliderAbout1 = new Swiper('#sliderAbout', {
		direction:'vertical',
		loop:true,
		pagination: {
			el: '.swiper-pagination',
			type: 'fraction',
			clickeable:true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
	// Slider About Horizontal
	var sliderAbout2 = new Swiper('#sliderAbout2', {
		loop:true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
	// Slider home
	var sliderHome = new Swiper('#sliderHome', {
		loop:true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevel: '.swiper-button-prev',
		},
	});
	// slider nosotros multislides
	var empleados = new Swiper('#empleados', {
		loop:true,
		slidesPerView:5,
		spaceBetween:30,
		pagination: {
			el: '.swiper-pagination',
			clickeable:true
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevel: '.swiper-button-prev',
		},
	});
});