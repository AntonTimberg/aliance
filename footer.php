<section class="calltoaction">
    <div class="bg-grey section-cta">
      <img src="img/bottle.png" alt="call to action" class="cta-image">
      <div class="cta-form-wrapper">
        <form action="handler.php" method="POST" class="cta-form">
          <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
          <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
            интересующие вопросы и поможем даже в самых сложных случаях!</p>
          <div class="input-group-wrapper container">
            <div class="input-group">
              <input id="user-name" type="text" class="input" name="user-name" 
              maxlength="100" placeholder=" " required>
              <label class="input-group-label" for="user-name">Имя</label>
            </div>
            <!--  1 -->
            <div class="input-group">
              <input id="user-phone" type="tel" class="input" name="user-phone" placeholder=" " maxlength="30">
              <label class="input-group-label" for="user-phone">Номер телефона</label>
            </div>

            <!--  2 -->
          </div>

          <div class="cta-form-footer">
            <button type="submit" class="button cta-form-button">Отправить заявку</button>
            <div class="notify">
              <svg class="notify-icon" width="14" height="14">
                <use href="img/sprites.svg#shield"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную<br> работу, но и абсолютную конфиденциальность
                информации!
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="modal-overlay" id="success-modal-overlay">
      <div class="modal" id="success-modal">
      <button class="modal-close" id="modal-close">
              <svg width="24" height="24">
                  <use href="img/sprites.svg#closer"></use>
              </svg>
          </button>
        <svg width="285" height="245.42" id="success-modal-woman">
          <use href="img/sprites.svg#bwoman"></use>
        </svg>
         <h2 class="modal-title" id="success-modal-title">Спасибо за заявку!</h2>
        <p class="modal-text" id="success-modal-text">
           Наш менеджер свяжется с Вами в ближайшее время, ответит на все интересующие вопросы и поможет даже в самых сложных случаях!
        </p>
      <button type="button" class="custom-button" id="return-to-main">Вернуться на главную</button>
     </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="footer-top">

        <svg class="logo-svg footer-logo">
          <use href="img/sprites.svg#logo"></use>
        </svg>

        <a href="tel:+79999999999" class="footer-phone">+7 (999) 999-99-99</a>
        <div class="footer-info">
          <svg class="phone-icon" width="24" height="24">
            <use href="img/sprites.svg#mark"></use>
          </svg>

          <address class="footer-info-address">
            г. Москва, Холодильный пер. 4х1с8
          </address>
        </div>
        <!-- /footere-info -->
        <div class="footer-info">
          <svg class="mail-icon" width="24" height="24">
            <use href="img/sprites.svg#mail"></use>
          </svg>
          <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
            a.dragunov@tdaliance.ru
          </a>
        </div>
        <!-- /footer-info -->
        <div class="footer-social">
          <a href="#" class="footer-social-link">
            <svg class="footer-social-icon" width="24" height="24">
              <use href="img/sprites.svg#vk"></use>
            </svg>
          </a>

          <a href="#" class="footer-social-link">
            <svg class="footer-social-icon" width="24" height="24">
              <use href="img/sprites.svg#inst"></use>
            </svg>
          </a>
        </div>
      </div>

    </div>
    <hr color="#ebebf0" class="footer-separator">

    <div class="container">
      <div class="footer-bottom">
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Контрактное производство</h2>
          <ul class="footer-menu-list footer-menu-column-2">
            <li class="footer-menu-item">
              <a href="" class="footer-menu-link">Автомобильная химия</a>
            </li>
            <li class="footer-menu-item">
              <a href="" class="footer-menu-link">Бытовая химия</a>
            </li>
            <li class="footer-menu-item">
              <a href="" class="footer-menu-link">Дезинфицирующие средства</a>
            </li>
            <li class="footer-menu-item">
              <a href="" class="footer-menu-link">Пищевые аэрозоли</a>
            </li>
            <li class="footer-menu-item">
              <a href="" class="footer-menu-link">Косметическая продукция</a>
            </li>
            <li class="footer-menu-item">
              <a href="" class="footer-menu-link">Краски аэрозольные</a>
            </li>
          </ul>

        </div>
        <!-- /footer-menu-wrapper -->
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Собственные марки</h2>
          <ul class="footer-menu-list footer-menu-column-2">
            <li class="footer-menu-item">
              <a href="" class="footer-menu-link">Автохимия AG-Tech</a>
            </li>
            <li class="footer-menu-item">
              <a href="" class="footer-menu-link">Автохимия AP</a>
            </li>
          </ul>

        </div>
        <!-- /footer-menu-wrapper -->
        <div class="footer-menu-wrapper">
          <ul class="footer-menu-list footer-menu-column-2">
            <li class="footer-menu-item">
              <a href="./about.php" class="footer-menu-link footer-menu-link-bold">О компании</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
            </li>
          </ul>

        </div>
        <!-- /footer-menu-wrapper -->
      </div>
    </div>
    <hr color="#ebebf0" class="footer-separator">
    <div class="container">
      <div class="footer-wrapper">
        <div class="footer-legal">
          <p class="footer-copyright">
            &copy; <?php echo date('Y')?> "Aliance Production". Все права защищены.
          </p>
          <a href="#" class="footer-policy">Политики конфиденциальности</a>
        </div>
        <div class="footer-author">
          <span class="made-in">Сделано в</span>
          <svg width="52" height="11">
            <use href="img/sprites.svg#ruso"></use>
          </svg>
        </div>
      </div>
    </div>
  </footer>


  
  <button data-toggle="modal" class="open-modal-btn"></button>

  <div class="modal-overlay" id="modal-overlay">
      <div class="modal" id="feedback-modal">
          <button class="modal-close" id="modal-close">
              <svg width="24" height="24">
                  <use href="img/sprites.svg#closer"></use>
              </svg>
          </button>
          <h2 class="modal-title">Есть вопросы?</h2>
          <p class="modal-text">
              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время, ответит на все интересующие вопросы и поможет даже в самых сложных случаях!
          </p>
          <form action="handler.php" method="POST" class="modal-form">
              <div class="custom-input-group">
                  <input id="custom-user-name" type="text" class="custom-input" name="user-name" placeholder=" ">
                  <label class="custom-input-label" for="custom-user-name">Имя</label>
              </div>
              <div class="custom-input-group">
                  <input id="custom-user-phone" type="tel" name="user-phone" class="custom-input"  placeholder=" ">
                  <label class="custom-input-label" for="custom-user-phone">Номер телефона</label>
              </div>
              <button type="submit" class="custom-button">Отправить заявку</button>
          </form>
          <div class="notify">
              <svg class="notify-icon" width="14" height="14">
                  <use href="img/sprites.svg#shield"></use>
              </svg>
              <p class="notify-text">
                  Обращаясь к нам, вы получаете не только<br> профессиональную работу, но и абсолютную<br> конфиденциальность информации!
              </p>
          </div>
      </div>
  </div>
