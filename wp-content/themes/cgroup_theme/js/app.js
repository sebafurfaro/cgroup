const body = document.getElementsByTagName('body')[0];
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

// show/hide function custom modal video
const videoModal = document.getElementById('videopopup');
var showPopup1 = document.getElementById('playModal');
var hidePopup1 = document.getElementById('hidePopup');
var videoPopup = new TimelineLite();

function showModalVideo() {
	body.classList.add('popup-open');
	videoPopup.to(
		videoModal,
		{right:'0%', autoAlpha:1}
	)
}
function hideModalVideo() {
	body.classList.remove('popup-open');
	videoPopup.to(
		videoModal,
		{right:'-100%', autoAlpha:0}
	)
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
			prevEl: '.swiper-button-prev',
		},
	});
	// slider nosotros multislides
	var empleados = new Swiper('#empleados', {
		loop:true,
		slidesPerView:5,
		spaceBetween:30,
		navigation: {
			nextEl: '.swiper-button-next',
			prevel: '.swiper-button-prev',
		},
	});
});