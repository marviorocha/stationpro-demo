/**
 * Custom JS for theme elements
 */

/**
 * WooCommerce active class for category list
 */
let url = window.location.href;
let catLink = document.querySelectorAll(".wc-block-product-categories-list li a");
catLink.forEach((item) => {
	if (item.href === url) {
		item.classList.add("active");
	}
});


// ADD CLASS WHILE SECTION IS IN VIEWPORT

var isInViewport = function (elem) {
	var distance = elem.getBoundingClientRect();
	var windowHeight = window.innerHeight || document.documentElement.clientHeight;
	// Calculate the middle of the element
	var elementMiddle = distance.top + distance.height / 2;
	return (
		elementMiddle >= 0 &&
		elementMiddle <= windowHeight
	);
};
var sections = document.querySelectorAll('.wp-block-section');
if (sections !== null) {
	window.addEventListener('scroll', function (event) {
		// add event on scroll
		sections.forEach(element => {
			//for each .thisisatest
			if (isInViewport(element)) {
				//if in Viewport
				element.classList.add("transition-element");
			}
		});
	}, false);
}


function highLifeCartUpdate() {
	let btnTrigger = document.querySelector('button[name="update_cart"]');
	if (btnTrigger !== null) {
		btnTrigger.addEventListener('click', function () {
			setTimeout(function () {
				highLifeQtyChange();
			}, 5000);
			setTimeout(function () {
				highLifeCartUpdate();
			}, 5000);
		});
	}
}
highLifeCartUpdate();

// Added to cart text change when product added
let cartBtn = document.querySelectorAll('.add_to_cart_button');
if (cartBtn !== null) {
	cartBtn.forEach((item) => {
		let text = 'added to cart';
		item.addEventListener('click', function () {
			item.innerHTML = text;
		});
	});
}

let checkDiv = document.querySelector('.woocommerce-shipping-fields .checkbox span');
if (checkDiv !== null) {
	checkDiv.onclick = function (e) {
		this.classList.toggle('checked');
	}
}

// Sticky Mobile Icon Menu body padding bottom
let fixedMenu = document.querySelector('.wp-mobile-icon-menu');
if (fixedMenu !== null) {
	document.body.style.paddingBottom = `${fixedMenu.clientHeight}px`;
}


// add reset password title for reset password form
let passTitle = document.createElement('h3');
let node = document.createTextNode('Reset Your Password');

passTitle.appendChild(node);

let element = document.querySelector('.woocommerce-lost-password .woocommerce');
let child = document.querySelector('.lost_reset_password');
if (element !== null) {
	element.insertBefore(passTitle, child);
}


//  FOR HEADER PRODUCT SEARCH 

const searchInput = document.querySelector('.wp-header-right .search-product input[type="search"]');
const mobileIcon = document.querySelector('.wp-mobile-icon-menu');
const searchCont = document.querySelectorAll('.wp-header-right');
const searchDummy = document.querySelector('.dummy-icon .wp-block-search__button');
const searchWrap = document.querySelector('.wp-header-right .search-product');
const ethredwearShowHandler = (e) => {
	console.log('object')
	e.preventDefault();
	let body = document.body;
	body.classList.toggle('search-toggle');
}
if (searchCont !== null) {
	searchCont.forEach((item) => {
		let searchBtn = document.querySelectorAll('.dummy-icon .wp-block-search__button')
		searchBtn.forEach((btn) => {
			btn.addEventListener('click', ethredwearShowHandler)
		})
	})
	if (mobileIcon !== null && searchCont !== null && searchWrap !== null && searchDummy !== null) {
		document.addEventListener('click', function (e) {
			if (!searchWrap.contains(e.target) && !searchDummy.contains(e.target) && !mobileIcon.contains(e.target)) {
				let body = document.body;
				body.classList.remove('search-toggle')
			}
		}
		)
	}
}


//Wrapping product category title and category price into a new div

let catWrapper = document.querySelectorAll('.wp-block-featured-category .wc-block-grid__product');
if (catWrapper !== null) {

	catWrapper.forEach((item) => {
		let btnWrap = document.createElement('div');
		btnWrap.classList.add('btn-wrap');
		item.appendChild(btnWrap);
		let catTitle = item.querySelectorAll('.wc-block-grid__product-title');
		catTitle.forEach((link) => {
			btnWrap.appendChild(link);
		})
		let catLink = item.querySelectorAll('.wc-block-grid__product-price');
		catLink.forEach((link) => {
			btnWrap.appendChild(link);
		})

	});
}

// header media load animation
let bannerWrap = document.querySelector('.wp-block-custom-header-media')
if (bannerWrap !== null) {
	setTimeout(() => bannerWrap.classList.add('show'), 200);
}

