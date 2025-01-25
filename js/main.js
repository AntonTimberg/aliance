const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.logo-svg use');
const mMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');

window.addEventListener('scroll', () => {
    if (menu.classList.contains('is-open')) {
        return;
    }

    if (window.scrollY > 1) {
        navbar.classList.add("navbar-light");
        logo.href.baseVal = "img/sprites.svg#logo";
    } else {
        navbar.classList.remove("navbar-light");
        logo.href.baseVal = "img/sprites.svg#logo-light";
    }
}); 

mMenuToggle.addEventListener('click', (event) => {
    event.preventDefault();
    menu.classList.toggle("is-open");

    mMenuToggle.classList.toggle("menu-opened");

    if (menu.classList.contains('is-open')) {
        logo.href.baseVal = "img/sprites.svg#logo";
    } else {
        if (window.scrollY > 1) {
            logo.href.baseVal = "img/sprites.svg#logo";
        } else {
            logo.href.baseVal = "img/sprites.svg#logo-light";
        }
    }
});
