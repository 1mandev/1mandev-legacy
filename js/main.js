// aos
AOS.init();

// Navigation
const nav = document.querySelector(".nav");
const toggleNav = document.querySelector("#toggle-navigation");
const navigation = document.querySelector(".navigation");

toggleNav.addEventListener("click", () => {
  nav.classList.toggle("navigation-closed");
  navigation.classList.toggle("navigation-open");
});

// Testimonial carousal
var elem = document.querySelector(".testimonial-carousel");
var flkty = new Flickity(elem, {
  // options
  cellAlign: "left",
  contain: true,
  wrapAround: true,
  autoPlay: 5000
});

// Portfolio carousel
var portfolio = document.querySelector(".portfolio-carousel");
var flkty = new Flickity(portfolio, {
  // options
  cellAlign: "left",
  contain: true,
  wrapAround: true,
  autoPlay: 5000
});
