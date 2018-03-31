import MobileMenu from './modules/MobileMenu';
import StickyHeader from './modules/StickyHeader';
import $ from 'jquery';
import RevealOnScroll from './modules/RevealOnScroll';
import Modal from './modules/Modal';

var mobileMenu = new MobileMenu();
new RevealOnScroll($(".feature-item"), "85%");
new RevealOnScroll($(".testimonial"), "60%");
var stickyHeader = new StickyHeader();
var modal = new Modal();


// function Person (fullName, favColor) {
// 	this.name = fullName;
// 	this.color = favColor;
// 	this.greet = function() {
// 		console.log("hello,my name is " + this.name + " and my favorite color is " + this.color + " .");
// 	}
// }

// var john = new Person("John Doe", "blue");
// john.greet();