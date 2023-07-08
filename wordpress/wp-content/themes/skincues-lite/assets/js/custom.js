/**
 * Custom JS for theme elements
 */

// Wocommerce active class for category list.
let url     = window.location.href;
let catLink = document.querySelectorAll(
	".wc-block-product-categories-list li a"
);
catLink.forEach((item) => {
	if (item.href === url) {
		item.classList.add("active");
	}
});


// wp-block-main-header Product Search.
let toggleButton = document.querySelector(".wp-block-main-header .wp-search-toggle .icon-search");
let toggleWrap = document.querySelector(".wp-block-main-header .wp-search-toggle");
if (toggleButton !== null) {
	toggleButton.addEventListener("click", function (e) {
		console.log("vayo?");
		e.stopPropagation();
		document.body.classList.add("open-search");
		toggleWrap.classList.add("toggled-on");
		let toogleContainer = document.querySelector(".wp-block-main-header .wp-custom-product-search-container");
		toogleContainer.addEventListener("click", function (e) {
			e.stopPropagation();
		});
		let toggleInput = document.querySelector(".wp-block-main-header .wp-block-search__input");
		window.setTimeout(() => toggleInput.focus(), 0);
	});
}
let toggleButtonClose = document.querySelector( ".wp-block-main-header .wp-search-toggle .icon-close");
if (toggleButtonClose !== null) {
	toggleButtonClose.addEventListener("click", function (e) {
		document.body.classList.remove("open-search");
		toggleWrap.classList.remove("toggled-on");
	});
}

document.addEventListener('click', function (event) {
	document.body.classList.remove("open-search");
	toggleWrap.classList.remove("toggled-on");
});




// Sticky Mobile Icon Menu Product Search.
let toggleButtonMobile = document.querySelector(".wp-mobile-icon-menu .wp-search-toggle .icon-search");
let toggleWrapMobile = document.querySelector(".wp-mobile-icon-menu .wp-search-toggle");
if (toggleButtonMobile !== null) {
	toggleButtonMobile.addEventListener("click", function (e) {
		e.stopPropagation();
		document.body.classList.add("open-search");
		toggleWrapMobile.classList.add("toggled-on");
		let toogleContainerMobile = document.querySelector(".wp-mobile-icon-menu .wp-custom-product-search-container");
		toogleContainerMobile.addEventListener("click", function (e) {
			e.stopPropagation();
		});
		let toggleInputMobile = document.querySelector(".wp-mobile-icon-menu .wp-block-search__input");
		window.setTimeout(() => toggleInputMobile.focus(), 0);
	});
}
let toggleButtonMobileClose = document.querySelector( ".wp-mobile-icon-menu .wp-search-toggle .icon-close");
if (toggleButtonMobileClose !== null) {
	toggleButtonMobileClose.addEventListener("click", function (e) {
		document.body.classList.remove("open-search");
		toggleWrap.classList.remove("toggled-on");
	});
}

document.addEventListener('click', function (event) {
	document.body.classList.remove("open-search");
	toggleWrapMobile.classList.remove("toggled-on");
});
