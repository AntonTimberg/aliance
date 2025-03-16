<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>О компании</title>
  <link rel="stylesheet" href="css/modalStyle.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style"
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    media="print" onload="this.media='all'">

  <link rel="icon" type="image/png" href="/img/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="/img/favicon/favicon.svg" />
  <link rel="shortcut icon" href="/img/favicon/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png" />
  <meta name="apple-mobile-web-app-title" content="Alliance Production" />
  <link rel="manifest" href="/img/favicon/site.webmanifest" />

  <link rel="preload" href="css/aboutStyle.css" as="style" onload="this.rel='stylesheet'">
  
  <noscript>
    <link rel="stylesheet" href="css/aboutStyle.css">
  </noscript>
</head>
<body>
  <?php 
    $page_title = 'О компании';
    include_once('header-page.php'); 
  ?>

  <div class="about-container">
    <section class="we_experts">
      <div class="container">
        <div class="expert_logo">
          <picture>
            <source type="image/webp" srcset="img/experts.webp">
            <img src="img/experts.png" alt="Expert-logo" class="expert_big_logo">
          </picture>
        </div>
        <div class="expertise-content">
          <div class="separator"></div>
          <h2 class="expertise-title">Мы – эксперты в области производства химии</h2>
          <p class="expertise-text">
            Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
          </p>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.we_experts -->

    <!-- Секция со слайдером -->
    <!-- <div class="container"> -->
      <div class="features-container">
        <div class="swiper features-slider">
          <ul class="swiper-wrapper header-features">
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
          <div class="slider-button-prev">
            <svg width="24" height="24">
              <use href="img/sprites.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="slider-button-next">
            <svg width="24" height="24">
              <use href="img/sprites.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
      </div>
    <!-- </div> -->
    <!-- /.container для слайдера -->
    <section class="our-production">
  <div class="container">
    <div class="our-production-wrapper">
      <div class="our-production-content">
      <div class="separator"></div>
        <h2 class="section-title">НАШЕ ПРОИЗВОДСТВО</h2>
        <p class="section-text">
        Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий. <br><br>
        Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения. 
        </p>
        <ul class="production-list">
          <li class="production-item">
            <svg width="30" height="30" aria-hidden="true">
              <use href="img/sprites.svg#car_wash"></use>
            </svg>
            <span>Автомобильная химия</span>
          </li>
          <li class="production-item">
            <svg width="30" height="30" aria-hidden="true">
              <use href="img/sprites.svg#house_about"></use>
            </svg>
            <span>Бытовая химия</span>
          </li>
          <li class="production-item">
            <svg width="30" height="30" aria-hidden="true">
              <use href="img/sprites.svg#sun_shield"></use>
            </svg>
            <span>Дезинфицирующие средства</span>
          </li>
          <li class="production-item">
            <svg width="30" height="30" aria-hidden="true">
              <use href="img/sprites.svg#spray_bottle"></use>
            </svg>
            <span>Пищевые аэрозоли</span>
          </li>
          <li class="production-item">
            <svg width="30" height="30" aria-hidden="true">
              <use href="img/sprites.svg#magic_hand"></use>
            </svg>
            <span>Косметическая продукция</span>
          </li>
          <li class="production-item">
            <svg width="30" height="30" aria-hidden="true">
              <use href="img/sprites.svg#brush_about"></use>
            </svg>
            <span>Краски аэрозольные</span>
          </li>
        </ul>
      </div>


      <div class="our-production-image">
        <picture>
          <source type="image/webp" srcset="img/doctor.webp">
          <img src="img/doctor.png" alt="Производство. Доктор" width="600" height="750">
        </picture>
      </div>
    </div>
  </div>
</section>


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


  <section class="section research-center">
  <div class="container">
    <div class="separator"></div>
    <h2 class="section-title research-title">Исследовательский центр<br>Aliance production</h2>
    <div class="research-content">
      <div class="research-col-left">
        <p>
          Явные признаки победы институционализации рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Приятно, граждане, наблюдать, как активно развивающиеся страны третьего мира могут быть ограничены исключительно образом мышления. Лишь независимые государства набирают популярность среди определенных слоев населения, а значит, должны быть указаны как претенденты на роль ключевых факторов. Лишь акционеры крупнейших компаний могут быть призваны к ответу.
        </p>
      </div>
      <div class="research-col-right">
        <p>
          С учётом сложившейся международной обстановки, синтетическое тестирование требует определения и уточнения анализа существующих паттернов поведения. Не следует, однако, забывать, что высокотехнологичная концепция общественного уклада представляет собой интересный эксперимент проверки как самодостаточных, так и внешне зависимых концептуальных решений. Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление однозначно фиксирует необходимость стандартных подходов.
        </p>
      </div>
    </div>
  </div>
</section>
<section class="section research-gallery">
  <div class="swiper research-gallery-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide research-gallery-slide">
        <picture>
          <source type="image/webp" srcset="img/Frame_1.webp">
          <img src="img/Frame_1.png" alt="Исследовательский центр 1" class="research-gallery-img">
        </picture>
      </div>
      <div class="swiper-slide research-gallery-slide">
        <picture>
          <source type="image/webp" srcset="img/Frame_2.webp">
          <img src="img/Frame_2.png" alt="Исследовательский центр 2" class="research-gallery-img">
        </picture>
      </div>
      <div class="swiper-slide research-gallery-slide">
        <picture>
          <source type="image/webp" srcset="img/Frame_1.webp">
          <img src="img/Frame_1.png" alt="Исследовательский центр 3" class="research-gallery-img">
        </picture>
      </div>
      <div class="swiper-slide research-gallery-slide">
        <picture>
          <source type="image/webp" srcset="img/Frame_2.webp">
          <img src="img/Frame_2.png" alt="Исследовательский центр 4" class="research-gallery-img">
        </picture>
      </div>
    </div>

    <div class="research-gallery-buttons primary-buttons-wrapper">
      <div class="research-gallery-button-prev primary-button-prev">
        <svg width="24" height="24">
          <use href="img/sprites.svg#arrow-prev"></use>
        </svg>
      </div>
      <div class="research-gallery-button-next primary-button-next">
        <svg width="24" height="24">
          <use href="img/sprites.svg#arrow-next"></use>
        </svg>
      </div>
    </div>
  </div>
</section>

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
  </div>
  <!-- /.about-container -->

  <?php include_once('footer.php'); ?>
</body>
</html>
