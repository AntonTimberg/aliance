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
        const feedbackModalOverlay = document.getElementById('modal-overlay');
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
              feedbackModalOverlay.classList.remove('active');
              event.target.reset();
            } 
          })
          .catch(error => {
            console.error('Ошибка:', error);
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
// Форма с банкой.

document.addEventListener('DOMContentLoaded', function () {
  var phoneInputs = document.querySelectorAll('#user-phone, #custom-user-phone');

  phoneInputs.forEach(function (phoneInput) {
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
});
// валидатор телефона

document.addEventListener('DOMContentLoaded', function () {
  function initializeModal() {
      const modal = document.getElementById('modal-overlay');
      const closeModalButton = document.getElementById('modal-close');
      
      const openModalButtons = document.querySelectorAll('[data-toggle="modal"], .navbar-button, .button-link');
      
      if (!modal || !closeModalButton) {
          console.warn('Модальное окно или кнопка закрытия не найдены');
          return;
      }

      const nameInput = document.getElementById('custom-user-name');
      const phoneInput = document.getElementById('custom-user-phone');
      const form = document.querySelector('.modal-form');

      function openModal() {
          modal.classList.add('active');
      }

      function closeModal() {
          modal.classList.remove('active');
      }

      openModalButtons.forEach(button => {
          button.addEventListener('click', (e) => {
              e.preventDefault();
              openModal();
          });
      });

      closeModalButton.addEventListener('click', closeModal);
      modal.addEventListener('click', function (event) {
          if (event.target === modal) {
              closeModal();
          }
      });

      if (form && nameInput && phoneInput) {
          form.addEventListener('submit', function (event) {
              const nameValue = nameInput.value.trim();
              const phoneValue = phoneInput.value.trim();
              const phoneValid = /^\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$/.test(phoneValue);

              if (!nameValue || !phoneValue || !phoneValid) {
                  event.preventDefault();
              }
          });
      }
  }

  // Инициализация при загрузке
  initializeModal();

  const observer = new MutationObserver(() => {
      initializeModal();
  });

  observer.observe(document.body, {
      childList: true,
      subtree: true
  });
});
// модалка обратной связи

const swiperResearchGallery = new Swiper(".research-gallery-slider", {
  speed: 400,
  slidesPerView: "auto",
  slidesPerGroup: 1,
  spaceBetween: 10,
  navigation: {
    nextEl: ".research-gallery-button-next",
    prevEl: ".research-gallery-button-prev",
  },
  breakpoints: {
    769: {
      spaceBetween: 30,
    },
  },
});

