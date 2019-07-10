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

// nav
const button = document.querySelector(".navigation__toggle");
const body = document.querySelector("body");

button.addEventListener("click", () => {
  body.classList.toggle("open");
});
