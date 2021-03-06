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
		// von mir eingefügt
		this.menuIcon2 = $(".site-header__menu-icon-2");
		// von mir eingefügt
		this.menuContent = $(".site-header__menu-content");
		this.events();
	}

	events() {
		this.menuIcon.click(this.toggleTheMenu.bind(this));
		// von mir eingefügt
		// Mag JavaScript keine menuIcon-2 ?
		// Stört der Bindestrich ?
		this.menuIcon2.click(this.toggleTheMenu.bind(this));
		// von mir eingefügt
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
		// von mir eingefügt
		this.menuIcon2.toggleClass("site-header__menu-icon--close-x-2");
		// von mir eingefügt
	}

}

export default MobileMenu;
