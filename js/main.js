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
const button = document.querySelector(".navigation__toggle"),
  body = document.querySelector("body"),
  navlist = document.querySelectorAll("nav ul li"),
  navigation = document.querySelector(".nav nav");

button.addEventListener("click", () => {
  body.classList.toggle("open");
  navigation.style.display = "block";
});

navlist.forEach(nav => {
  nav.addEventListener("click", () => {
    body.classList.remove("open");
  });
});
