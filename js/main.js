const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");
const lightModeOn = () => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprites.svg#logo";
};

const darkModeOn = () => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprites.svg#logo-light";
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
}

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
  window.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  if (isFront) {
    window.scrollY > 1 ? lightModeOn() : darkModeOn();
  }
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

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    769: {
      slidesPerView: 2,
    },
  },
});

function updateSizes() {
  let button = document.querySelector('.cta-form-button');
  let inputGroups = document.querySelectorAll('.input-group');

  if (!button || inputGroups.length === 0) return;

  let maxHeight = 0;

  inputGroups.forEach(input => {
      maxHeight = Math.max(maxHeight, input.offsetHeight);
  });

  if (window.innerWidth < 995) {
      let width = button.offsetWidth + 'px';

      inputGroups.forEach(input => input.style.width = width);
      button.style.height = maxHeight + 'px';
      
  } else {
      inputGroups.forEach(input => input.style.width = '');
      button.style.height = '';
  }
}

window.addEventListener('load', updateSizes);
window.addEventListener('resize', updateSizes);

const buttonObserver = new ResizeObserver(updateSizes);
buttonObserver.observe(document.querySelector('.cta-form-button'));

document.addEventListener("DOMContentLoaded", function () {
  const modalOverlay = document.getElementById("modal-overlay");
  const openModalBtn = document.querySelector("[data-toggle='modal']");
  const closeModalBtn = document.getElementById("modal-close");

  openModalBtn.addEventListener("click", function () {
    modalOverlay.classList.add("active");
  });

  function closeModal() {
    modalOverlay.classList.add("closing");
    setTimeout(() => {
      modalOverlay.classList.remove("active", "closing");
    }, 300);
  }

  closeModalBtn.addEventListener("click", closeModal);

  modalOverlay.addEventListener("click", function (event) {
    if (event.target === modalOverlay) {
      closeModal();
    }
  });

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      closeModal();
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  if (window.location.pathname.includes("about.html")) {
    document.querySelector(".navbar").classList.add("navbar-light");
  }
});

document.addEventListener('DOMContentLoaded', function () {
  const forms = document.querySelectorAll('form');
  
  const modalOverlay = document.querySelector('.modal-overlay');
  const modalClose = document.querySelector('.modal-close');
  const returnToMainBtn = document.querySelector('#return-to-main');

  forms.forEach(form => {
    const validation = new JustValidate(form, {
      errorFieldCssClass: 'is-invalid',
    });

    validation
      .addField('[name="user-name"]', [
        {
          rule: 'required',
          errorMessage: 'Укажите имя',
        },
        {
          rule: 'maxLength',
          value: 50,
          errorMessage: 'Максимальная длина — 50 символов',
        },
      ])
      .addField('[name="user-phone"]', [
        {
          rule: 'required',
          errorMessage: 'Укажите телефон',
        },
        {
          validator: (value) => {
            const phoneDigits = value.replace(/\D/g, '');
            return phoneDigits.length === 11;
          },
          errorMessage: 'Введите корректный номер телефона',
        },
      ])
      .onSuccess((event) => {
        event.preventDefault();

        const formData = new FormData(event.target);

        fetch('handler.php', {
          method: 'POST',
          body: formData,
        })
          .then(response => response.text())
          .then(data => {
            if (data === 'success') {
              console.log('Форма успешно отправлена');
              modalOverlay.classList.add('active');
              event.target.reset();
            } else {
              alert('Произошла ошибка при отправке формы');
            }
          })
          .catch(error => {
            console.error('Ошибка:', error);
            alert('Произошла ошибка при отправке формы');
          });
      });
  });

  modalClose.addEventListener('click', () => {
    modalOverlay.classList.add('closing');
    setTimeout(() => {
      modalOverlay.classList.remove('active', 'closing');
    }, 300);
  });

  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
      modalOverlay.classList.add('closing');
      setTimeout(() => {
        modalOverlay.classList.remove('active', 'closing');
      }, 300);
    }
  });

  returnToMainBtn.addEventListener('click', () => {
    modalOverlay.classList.add('closing');
    setTimeout(() => {
      modalOverlay.classList.remove('active', 'closing');
      window.location.href = '/index.php';
    }, 300);
  });
});


// document.addEventListener('DOMContentLoaded', function () {
//   const phoneInput = document.querySelector('input[name="user-phone"]');
//   const phoneMask = new Inputmask('+7 (999) 999-99-99');
//   phoneMask.mask(phoneInput);
// });


document.addEventListener('DOMContentLoaded', function () {
  var phoneInput = document.getElementById('user-phone');

  phoneInput.addEventListener('input', function (e) {
    var x = phoneInput.value.replace(/\D/g, '').match(/(\d{1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
    phoneInput.value = '+7 ' + (x[2] ? '(' + x[2] : '') + (x[3] ? ') ' + x[3] : '') + (x[4] ? '-' + x[4] : '') + (x[5] ? '-' + x[5] : '');
  });

  phoneInput.addEventListener('focus', function (e) {
    if (phoneInput.value.length === 0) {
      phoneInput.value = '+7 ';
    }
  });

  phoneInput.addEventListener('blur', function (e) {
    if (phoneInput.value === '+7 ') {
      phoneInput.value = '';
    }
  });
});