const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = () => {
    navbar.classList.add("navbar-light");
    logo.href.baseVal = "img/sprites.svg#logo";
};

const darkModeOn = () => {
    navbar.classList.remove("navbar-light");
    logo.href.baseVal = "img/sprites.svg#logo-light";
};

const openMenu = (event) => {
  menu.classList.add("is-open");
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden";
  lightModeOn();
};

const closeMenu = (event) => {
  menu.classList.remove("is-open");
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = "auto";
  darkModeOn();
};

window.addEventListener("scroll", () => {
  window.scrollY > 1 ? lightModeOn() : darkModeOn();
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

  