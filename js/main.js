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

window.addEventListener("scroll", () => {
  if (window.scrollY > 1) {
    mMenuToggle.classList.add("burger-gray");
  } else {
    mMenuToggle.classList.remove("burger-gray");
  }
});

const swiper = new Swiper(".features-slider", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  slidesPerView: 'auto',
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    576: {
      
        slidesPerView: 2,
        
    },
    768: {
        slidesPerView: 3,
    } ,
    1024: {
        slidesPerView: 4,
    },
    1201: {
        slidesPerView: 5,
    },
  },
});

const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
  },
  breakpoints: {
    568: {
       slidesPerView: 1,
       spaceBetween: 16,
    },
    576: {
        slidesPerView: 2,
    },
    768: {
        slidesPerView: 3,
    } ,
    1024: {
        slidesPerView: 4,
    },
  },
});
