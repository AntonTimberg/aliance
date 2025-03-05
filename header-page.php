<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item">
                <a href="#" class="mobile-menu-link">О компании</a>
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

    <?php include_once('navbar.php'); ?>

    <container class="header-title">
        <div class="header-title-content">
            <div class="separator"></div>
            <h2><?php echo $page_title; ?></h2>
            <nav class="navigator">
                <a href="index.php" class="navigator-link">Главная</a>
                <span class="navigator-separator">-</span>
                <span class="navigator-current"><?php echo $page_title; ?></span>
            </nav>
        </div>
        
    </container>

    


</body>

</html>