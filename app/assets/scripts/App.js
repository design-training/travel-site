import MobileMenu from './modules/MobileMenu';
import StickyHeader from './modules/StickyHeader';
import $ from 'jquery';
import RevealOnScroll from './modules/RevealOnScroll';

var mobileMenu = new MobileMenu();
new RevealOnScroll($(".feature-item"), "85%");
new RevealOnScroll($(".testimonial"), "60%");
var stickyHeader = new StickyHeader();