<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <title>Aliance Production</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body class="front-page">
  <header class="header header-image">

    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.html" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Собственные марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+79999999999" class="mobile-phone">+7 (999) 999-99-99</a>
      <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprites.svg#mark"></use>
        </svg>

        <address class="mobile-info-address">
          г. Москва, Холодильный пер. 4х1с8
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprites.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>

      <div class="mobile-info social-icons">
        <svg class="social-icon" width="24" height="24">
          <use href="img/sprites.svg#vk"></use>
        </svg>
        <svg class="social-icon" width="24" height="24">
          <use href="img/sprites.svg#inst"></use>
        </svg>
      </div>
    </div>
    <!-- mobile-menu -->

    <nav class="navbar">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg">
          <use href="img/sprites.svg#logo-light"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="./about.html" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprites.svg#phone"></use>
        </svg>
        <a href="tel:+79999999999" class="header-phone-link">+7 (999) 999-99-99</a>
      </div>
      <!-- /.header-phone -->
      <button class="navbar-button button">
        <span class="button-icon">
          <svg width="24" height="24" fill="#fff">
            <use href="img/sprites.svg#phone-white"></use>
          </svg>
        </span>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->

    <div class="container">
      <div class="header-content">
        <div class="separator"></div>
        <h1 class="header-title">
          <?php echo "Главная страница"; ?>
        </h1>
        <p class="header-text">
          Высокий уровень вовлечения представителей целевой аудитории является чётким доказательством простого факта:
          высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.
        </p>
        <button class="button header-button" data-toggle="modal">Подробнее о компании</button>
      </div>
      <!-- /.header-content -->


    </div>
    <div class="swiper features-slider">
      <ul class="swiper-wrapper header-features">
        <!-- Slides -->
        <li class="swiper-slide header-features-item">
          <svg width="36" height="36" aria-hidden="true">
            <use xlink:href="img/sprites.svg#watch"></use>
          </svg>
          <p class="header-features-text">Непрерывная работа c 2017 года</p>
        </li>
        <li class="swiper-slide header-features-item">
          <svg width="36" height="36" aria-hidden="true">
            <use xlink:href="img/sprites.svg#document"></use>
          </svg>
          <p class="header-features-text">Вся продукция сертифицирована</p>
        </li>
        <li class="swiper-slide header-features-item">
          <svg width="36" height="36" aria-hidden="true">
            <use xlink:href="img/sprites.svg#worker"></use>
          </svg>
          <p class="header-features-text">Контроль качества на всех этапах</p>
        </li>
        <li class="swiper-slide header-features-item">
          <svg width="36" height="36" aria-hidden="true">
            <use xlink:href="img/sprites.svg#car"></use>
          </svg>
          <p class="header-features-text">Возможны поставки по всей России</p>
        </li>
        <li class="swiper-slide header-features-item">
          <svg width="36" height="36" aria-hidden="true">
            <use xlink:href="img/sprites.svg#palitra"></use>
          </svg>
          <p class="header-features-text">Оперативное производство</p>
        </li>
      </ul>
    </div>
    <div class="slider-buttons">
      <div class="slider-button-prev"><svg width="24" height="24">
          <use href="img/sprites.svg#arrow-prev"></use>
        </svg></div>
      <div class="slider-button-next"><svg width="24" height="24">
          <use href="img/sprites.svg#arrow-next"></use>
        </svg></div>
    </div>
    <!-- /.container -->
  </header>
  <!-- /.header -->

  <section class="section section-light">
    <div class="container">
      <div class="separator"></div>
      <h2 class="section-title">схема работы</h2>

      <div class="swiper steps-slider">
        <!-- Additional required wrapper -->
        <ol class="swiper-wrapper steps">
          <li class="swiper-slide steps-item">
            <span class="steps-num">01</span>
            <h3 class="steps-title">Знакомство</h3>
            <p class="steps-text">
              Безусловно, сплочённость команды профессионалов позволяет оценить значение
              форм воздействия.
            </p>
            <a href="#" class="button-link">Оставить заявку</a>
          </li>

          <li class="swiper-slide steps-item">
            <span class="steps-num">02</span>
            <h3 class="steps-title">Заключение договора</h3>
            <p class="steps-text">
              Лишь интерактивные прототипы призваны к ответу.
            </p>
          </li>

          <li class="swiper-slide steps-item">
            <span class="steps-num">03</span>
            <h3 class="steps-title">Производство</h3>
            <p class="steps-text">
              А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены
              на независимые элементы.
            </p>
          </li>

          <li class="swiper-slide steps-item">
            <span class="steps-num">04</span>
            <h3 class="steps-title">Доставка</h3>
            <p class="steps-text">
              В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации разума
              над эмоциями.
            </p>
          </li>
        </ol>


        <!-- If we need navigation buttons -->
        <div class="steps-buttons primary-buttons-wrapper">
          <div class="steps-button-prev primary-button-prev">
            <svg width="24" height="24">
              <use href="img/sprites.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="steps-button-next primary-button-next">
            <svg width="24" height="24">
              <use href="img/sprites.svg#arrow-next"></use>
            </svg>
          </div>
        </div>

      </div>
      <!-- /.swiper -->
    </div>
  </section>
  <!-- /.section -->

  <section class="section production">
    <div class="container">
      <div class="separator"></div>
      <div class="section-title">контрактное производство</div>
      <div class="cards">
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Автомобильная химия</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.</p>
          </div>
          <img src="img/metal.png" alt="Автомобильная химия" class="card-image">
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Бытовая химия</h3>
            <p class="card-text">
              А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на
              независимые элементы.
            </p>
          </div>
          <img src="img/losk.png" alt="Бытовая химия" class="card-image">
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Дезинфицирующие средства</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
          </div>
          <img src="img/septar.png" alt="Дезинфицирующие средства" class="card-image">
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Пищевые аэрозоли</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.</p>
          </div>
          <img src="img/septar.png" alt="Пищевые аэрозоли" class="card-image">
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Косметическая продукция</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
          </div>
          <img src="img/metal.png" alt="Косметическая продукция" class="card-image">
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Краски аэрозольные</h3>
            <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
              разнесены на независимые элементы.</p>
          </div>
          <img src="img/losk.png" alt="Краски аэрозольные" class="card-image">
        </a>
      </div>
      <!-- /.cards -->
    </div>
  </section>

  <section class="section trademark">
    <div class="container">
      <div class="separator"></div>
      <div class="section-title">собственные торговые марки</div>

      <div class="trademark-cards">

        <div class="trademark-card">
          <svg class="trademark-card-logo">
            <use href="img/sprites.svg#AGTECH"></use>
          </svg>
          <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
          <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное
            мышление создаёт предпосылки для поставленных обществом задач.</p>
        </div>


        <div class="trademark-card">
          <svg class="trademark-card-logo">
            <use href="img/sprites.svg#AP"></use>
          </svg>
          <!-- /.trademark-card-content -->
          <h3 class="trademark-card-title">Автохимия AP</h3>
          <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное
            мышление создаёт предпосылки для поставленных обществом задач.</p>
        </div>

      </div>
    </div>
  </section>

  <section class="section founder">
    <img src="img/founder.jpg" alt="" class="founder-photo">
    <div class="container">
      <div class="founder-content-wrapper">
        <div class="founder-content">
          <div class="separator"></div>
          <h2 class="section-title">Отношение к делу и к клиентам</h2>
          <p class="founder-text">Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика
            показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий
            активизации. Внезапно, независимые государства, которые представляют собой яркий пример
            континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых
            исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную
            потребность системы массового участия.
            <br><br>
            А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной
            степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в
            значительной степени обусловливает важность дальнейших направлений развития.
          </p>

          <a href="#" class="button-link">Подробнее о компании</a>
        </div>
      </div>
      <!-- /.founder-content-wrapper -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section -->

  <section class="section clinets">
    <div class="container">
      <div class="separator"></div>
      <div class="clients-wrapper">
        <div class="clients-content">
          <h2 class="section-title">Производим аэрозольную продукцию для разных сфер</h2>
          <ul class="clients-list">

            <li class="clients-list-item">
              <svg width="30" height="30" class="client-list-icon">
                <use href="img/sprites.svg#chemical"></use>
              </svg>
              Химические производства
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="client-list-icon">
                <use href="img/sprites.svg#auto"></use>
              </svg>
              Автомойки
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="client-list-icon">
                <use href="img/sprites.svg#food"></use>
              </svg>
              Пищевая продукция
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="client-list-icon">
                <use href="img/sprites.svg#paint"></use>
              </svg>
              Лаки и краски
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="client-list-icon">
                <use href="img/sprites.svg#hand"></use>
              </svg>
              Косметические средства
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="client-list-icon">
                <use href="img/sprites.svg#auto-mech"></use>
              </svg>
              Автомобильная косметика
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="client-list-icon">
                <use href="img/sprites.svg#t-shirt"></use>
              </svg>
              Косметика по уходу за одеждой
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="client-list-icon">
                <use href="img/sprites.svg#footprints"></use>
              </svg>
              Косметика по уходу за обувью
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="client-list-icon">
                <use href="img/sprites.svg#table"></use>
              </svg>
              Строительные материалы
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="client-list-icon">
                <use href="img/sprites.svg#dots"></use>
              </svg>
              И многих других
            </li>

          </ul>
          <!-- /.clients-list -->
        </div>
        <!-- /.clients-content -->
        <div class="clients-logo">
          <a href="#" class="clients-logo-item"><img src="img/Burger_King.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/Burger_King.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/Burger_King.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/Burger_King.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/Burger_King.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/Burger_King.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/Burger_King.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/Burger_King.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/Burger_King.png" alt="" class="clients-logo"></a>
        </div>
        <!-- /.clients-logo -->
      </div>
      <!-- /.clients-wrapper -->
    </div>
  </section>

  <section class="section blog">
    <div class="container">
      <div class="separator"></div>
      <h2 class="section-title">Блог экспертов в области производства</h2>
      <div class="swiper blog-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <a href="#" class="swiper-slide blog-card">
            <img src="img/Blog/method.png" alt="" class="blog-card-image">
            <div class="blog-card-content">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной
                степени предоставлены...
              </p>
            </div>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img src="img/Blog/pipeline.png" alt="" class="blog-card-image">
            <div class="blog-card-content">
              <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы.
                Безусловно, высокотехнологичная...
              </p>
            </div>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img src="img/Blog/method.png" alt="" class="blog-card-image">
            <div class="blog-card-content">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной
                степени предоставлены...
              </p>
            </div>
          </a>
        </div>

        <!-- If we need navigation buttons -->
        <div class="blog-slider-footer">
          <a href="#" class="button-link">Весь блог</a>
          <div class="blog-buttons primary-buttons-wrapper">
            <div class="blog-button-prev primary-button-prev">
              <svg width="24" height="24">
                <use href="img/sprites.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="blog-button-next primary-button-next">
              <svg width="24" height="24">
                <use href="img/sprites.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="calltoaction">
    <div class="bg-grey section-cta">
      <img src="img/bottle.png" alt="call to action" class="cta-image">
      <div class="cta-form-wrapper">
        <form action="" class="cta-form">
          <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
          <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
            интересующие вопросы и поможем даже в самых сложных случаях!</p>
          <div class="input-group-wrapper container">
            <div class="input-group">
              <input id="user-name" type="text" class="input" placeholder=" ">
              <label class="input-group-label" for="user-name">Имя</label>
            </div>
            <!--  1 -->
            <div class="input-group">
              <input id="user-phone" type="tel" class="input" placeholder=" ">
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
              <a href="./about.html" class="footer-menu-link footer-menu-link-bold">О компании</a>
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
      <div class="modal">
          <button class="modal-close" id="modal-close">
              <svg width="24" height="24">
                  <use href="img/sprites.svg#closer"></use>
              </svg>
          </button>
          <h2 class="modal-title">Есть вопросы?</h2>
          <p class="modal-text">
              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время, ответит на все интересующие вопросы и поможет даже в самых сложных случаях!
          </p>
          <form action="#" class="modal-form">
              <div class="custom-input-group">
                  <input id="custom-user-name" type="text" class="custom-input" placeholder=" ">
                  <label class="custom-input-label" for="custom-user-name">Имя</label>
              </div>
              <div class="custom-input-group">
                  <input id="custom-user-phone" type="tel" class="custom-input" placeholder=" ">
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

  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>