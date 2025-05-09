<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style"
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    media="print" onload="this.media='all'">
  <link rel="stylesheet" href="css/modalStyle.css">
  
  <title>Aliance Production</title>

  <link rel="icon" type="image/png" href="/img/favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/img/favicon/favicon.svg" />
<link rel="shortcut icon" href="/img/favicon/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Alliance Production" />
<link rel="manifest" href="/img/favicon/site.webmanifest" />
</head>


<body class="front-page">
  <header class="header header-image">
    <picture>
        <source type="image/webp" srcset="img/main_img.webp">
        <source type="image/jpeg" srcset="img/main_img.png">
        <img src="img/main_img.png" alt="фон">
    </picture>


          
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
  <span class="mobile-menu-link">Контрактное производство</span>
  <ul class="mobile-submenu">
    <li class="mobile-submenu-item">
    <a class="mobile-submenu-link" href="/autoChem.php">Автомобильная химия</a>

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
          <a href="./news.php" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contacts.php" class="mobile-menu-link">Контакты</a>
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
          <a href="./about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="./brands.php" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="./news.php" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="./contacts.php" class="header-nav-link">Контакты</a>
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
        Комплексное обеспечение товарами и расходными материалами бизнеса
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
        <a href="/autoChem.php" class="card">
          <div class="card-content">
            <h3 class="card-title">Автомобильная химия</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.</p>
          </div>
          <picture>
      <source type="image/webp" srcset="img/metal.webp">
      <source type="image/jpeg" srcset="img/metal.jpg">
      <img src="img/metal.png" alt="Автомобильная химия" class="card-image">
    </picture>
          
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Бытовая химия</h3>
            <p class="card-text">
              А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на
              независимые элементы.
            </p>
          </div>
          <picture>
      <source type="image/webp" srcset="img/losk.webp">
      <source type="image/jpeg" srcset="img/losk.jpg">
      <img src="img/losk.png" alt="Бытовая химия" class="card-image">
    </picture>
          
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Дезинфицирующие средства</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
          </div>
          <picture>
      <source type="image/webp" srcset="img/septar.webp">
      <source type="image/jpeg" srcset="img/septar.jpg">
      <img src="img/septar.jpg" alt="Дезинфицирующие средства" class="card-image">
    </picture>
          
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Пищевые аэрозоли</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.</p>
          </div>
          <picture>
      <source type="image/webp" srcset="img/septar.webp">
      <source type="image/jpeg" srcset="img/septar.jpg">
      <img src="img/septar.jpg" alt="Дезинфицирующие средства" class="card-image">
    </picture>
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Косметическая продукция</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
          </div>
          <picture>
      <source type="image/webp" srcset="img/metal.webp">
      <source type="image/jpeg" srcset="img/metal.jpg">
      <img src="img/metal.png" alt="Автомобильная химия" class="card-image">
    </picture>
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Краски аэрозольные</h3>
            <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
              разнесены на независимые элементы.</p>
          </div>
          <picture>
      <source type="image/webp" srcset="img/losk.webp">
      <source type="image/jpeg" srcset="img/losk.jpg">
      <img src="img/losk.png" alt="Краски аэрозольные" class="card-image">
    </picture>
          
        </a>
      </div>
      <!-- /.cards -->
    </div>
  </section>

  <?php $block_title = 'собственные торговые марки'; include_once('./php_templates/trademarks_block.php'); ?>

  <section class="section founder">
    <picture>
      <source type="image/webp" srcset="img/founder.webp">
      <source type="image/jpeg" srcset="img/founder.jpg">
    <img src="img/founder.jpg" alt="" class="founder-photo">
    </picture>
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
            <picture>
      <source type="image/webp" srcset="img/Blog/method.webp">
      <source type="image/jpeg" srcset="img/Blog/method.jpg">
      <img src="img/Blog/method.png" alt="" class="blog-card-image">

    </picture>
            <div class="blog-card-content">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной
                степени предоставлены...
              </p>
            </div>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <picture>
      <source type="image/webp" srcset="img/Blog/pipeline.webp">
      <source type="image/jpeg" srcset="img/Blog/pipeline.jpg">
      <img src="img/Blog/pipeline.png" alt="" class="blog-card-image">
    </picture>
            <div class="blog-card-content">
              <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы.
                Безусловно, высокотехнологичная...
              </p>
            </div>
          </a>
          <a href="#" class="swiper-slide blog-card">
          <picture>
      <source type="image/webp" srcset="img/Blog/method.webp">
      <source type="image/jpeg" srcset="img/Blog/method.jpg">
      <img src="img/Blog/method.png" alt="" class="blog-card-image">

    </picture>
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

  <?php include_once('footer.php'); ?>

  

  
</body>

</html>