import $ from 'jquery';

class MobileMenu {
	constructor() {
		// alert("Testing from MobileMenu.");

		// jQuery Spagetti
		// $(".site-header__menu-icon").click(function() {
		// 	console.log("The top right icon was clicked.");
		// });

		// Better way to do it
		this.siteHeader = $(".site-header");
		this.menuIcon = $(".site-header__menu-icon");
		this.menuContent = $(".site-header__menu-content");
		this.events();
	}

	events() {
		this.menuIcon.click(this.toggleTheMenu.bind(this));
		console.log(this);
	}

	toggleTheMenu() {
		// console.log("icon was cicked.");
		// alert(this);
		// console.log(this);
		// this.remove();
		this.menuContent.toggleClass("site-header__menu-content--is-visible");
		this.siteHeader.toggleClass("site-header--is-expanded");
		this.menuIcon.toggleClass("site-header__menu-icon--close-x");
	}

}

export default MobileMenu;
