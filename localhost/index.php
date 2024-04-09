<?php
    // Инициализация пользовательской сессии
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница Comics shop</title>
    <link rel="stylesheet" href="assest/CSS/main_page.css">
    <link rel="stylesheet" href="assest/CSS/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <!--
        Шапка сайта
    -->
    <header class="header">
        <div class="header-section container">
            <div class="row pt-0 pt-md-3 mb-3 align-items-center header-pos">
                <!-- Логотип -->
                <div class="col-12 col-md-auto header-logo">
                    <div class="nav navbar navv">
                        <ul class="nav__list">
                                <li class="nav__item">
                                    <a href="index.php" class="logo-block">
                                        <img src="assest/img/logo.png" alt="Логотип" title="The comics shop" class="logo-img">
                                    </a>
                                </li>
                            <? if (!isset($_SESSION['user'])) { ?> <!-- Если не существует сессия с параметром user, то вывод след. ссылок -->

                                <li class="nav__item personal reg">
                                    <img src="assest/img/account.png" alt="Войти">
                                    <a href="blocks/Login_page.php" class="nav__link">Войти</a>
                                </li>

                                <li class="nav__item personal">
                                    <img src="assest/img/account.png" alt="Зарегистрироваться">
                                    <a href="blocks/Registration_page.php" class="nav__link">Зарегистрироваться</a>
                                </li>

                            <? } elseif ($_SESSION['user']['role'] == 'admin') { ?> <!-- в случае если сессия пользователя равна админской, то -->
                                <li class="nav__item admin_link"><a class="nav__link " href="#">Админ-панель</a></li>
                                <li class="nav__item admin_link"><a class="nav__link " href="includes/logout.php">Выход</a></li>

                            <? } else { ?> <!-- в данном случаев выводит следующее -->
                                <li class="nav__item personal reg">
                                    <img src="assest/img/account.png" alt="Личный кабинет">
                                    <a href="blocks/Personal_page.php" class="nav__link">Личный кабинет</a>
                                </li>
                                <li class="nav__item"><a class="nav__link " href="includes/logout.php">Выход</a></li>
                                <li class="nav__item personal">
                                    <button class="cart" id="cart">
                                        <img class="cart__image" src="assest/img/shopping_cart.svg" alt="Cart" />
                                        <div class="cart__num" id="cart_num">0</div>
                                    </button>
                                </li>
                            <? } ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="header_section">
                <div class="header-section container">
                    <div class="col">
                        <nav class="top-nav">
                            <ul class="nav-list-1">
                                <li class="nav-1">
                                    <a href="blocks/Category_page.php" class="nav-1 nav-1-link">
                                        <span class="nav-1-link-text">Каталог комиксов</span>
                                    </a>
                                </li>

                                <li class="nav-1">
                                    <a href="blocks/Contact_page.php" class="nav-1 nav-1-link">
                                        <span class="nav-1-link-text">Наши контакты</span>
                                    </a>
                                </li>

                                <li class="nav-1">
                                    <a href="blocks/Revuise_page.php" class="nav-1 nav-1-link">
                                        <span class="nav-1-link-text">Отзывы</span>
                                    </a>
                                </li>

                                <li class="nav-1">
                                    <a href="blocks/About_page.php" class="nav-1 nav-1-link">
                                        <span class="nav-1-link-text">О «Comics Shop»</span>
                                    </a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- ./header_section -->
        </div>
    </header>

    <main class="main-section container">
        <!-- 
            Слайдер-баннер
        -->
        <div class="carousel">
            <div class="carousel-window">
                <div class="carousel-slides">
                    <div class="carousel-item">
                        <img src="assest/img/Sliders/slider1.png" alt="Баннер-слайдер" title="Баннер манги">
                    </div>
                    <div class="carousel-item">
                        <img src="assest/img/Sliders/slider2.png" alt="Баннер-слайдер" title="Баннер марвел">
                    </div>
                    <div class="carousel-item">
                        <img src="assest/img/Sliders/slider3.png" alt="Баннер-слайдер" title="Баннер комиксов">
                    </div>
                </div>
            </div>
            <a href="#" class="carousel-prev">
                <span class="carousel-prev-icon">&lt;</span>
            </a>
            <a href="#" class="carousel-next">
                <span class="carousel-next-icon">&gt;</span>
            </a>
        </div>
    </main>
    <!-- ./main-section -->

    <main class="main-section section__two container">
        <h1 class="sect__title">Наш популярный каталог</h1>
        <div class="popular__catalogs">
            <div class="popular-item">
                <a href="blocks/Catalog_page.php">
                    <img src="assest/img/Category_images/manga.png" alt="Манга">
                </a>
            </div>
            <div class="popular-item">
                <a href="blocks/Catalog_page.php">
                    <img src="assest/img/Category_images/marvel.png" alt="Комиксы Марвел">
                </a>
            </div>
            <div class="popular-item">
                <a href="blocks/Catalog_page.php">
                    <img src="assest/img/Category_images/comics_dc.png" alt="Комиксы ДС">
                </a>
            </div>
        </div>
        <h1 class="sect__title">Наши новинки</h1>

        <!-- 
            Новинки товаров
        -->
        <div class="cards" id="cards">

            <div class="card">
                <div class="card__top">
                    <a href="blocks/Cart_page.php" class="card__image">
                        <img src="assest/img/Cataloge_images/cart1.png" alt="Новые мстители. Полное собрание. Том 3" title="Новые мстители. Полное собрание. Том 3">
                    </a>
                </div>
                <div class="card__bottom">
                    <div class="card__prices">
                        <div class="card__price card__price--discount">2 490</div>
                        <div class="card__price card__price--common">2 490</div>
                    </div>
                    <a href="#" class="card__title">Новые мстители. Полное собрание. Том 3</a>
                    <button class="card__add">
                        В корзину
                        <i class="simbol"></i>
                    </button>
                </div>
            </div>
            <!-- 1 товар -->

            <div class="card">
                <div class="card__top">
                    <a href="blocks/Cart_page.php" class="card__image">
                        <img src="assest/img/Cataloge_images/cart2.png" alt="Ящик пандоры. Книга 11" title="Ящик пандоры. Книга 11">
                    </a>
                </div>
                <div class="card__bottom">
                    <div class="card__prices">
                        <div class="card__price card__price--discount">950</div>
                        <div class="card__price card__price--common">950</div>
                    </div>
                    <a href="#" class="card__title">Ящик пандоры. Книга 11</a>
                    <button class="card__add">
                        В корзину
                        <i class="simbol"></i>
                    </button>
                </div>
            </div>
            <!-- 2 товар -->

            <div class="card">
                <div class="card__top">
                    <a href="blocks/Cart_page.php" class="card__image">
                        <img src="assest/img/Cataloge_images/cart3.png" alt="БРСРК. Книга в ограниченном издании" title="БРСРК. Книга в ограниченном издании">
                    </a>
                </div>
                <div class="card__bottom">
                    <div class="card__prices">
                        <div class="card__price card__price--discount">220</div>
                        <div class="card__price card__price--common">220</div>
                    </div>
                    <a href="#" class="card__title">БРСРК. Книга в ограниченном издании</a>
                    <button class="card__add">
                        В корзину
                        <i class="simbol"></i>
                    </button>
                </div>
            </div>
            <!-- 3 товар -->

            <div class="card">
                <div class="card__top">
                    <a href="blocks/Cart_page.php" class="card__image">
                        <img src="assest/img/Cataloge_images/cart4.png" alt="Новые мстители. Полное собрание. Том 4" title="Новые мстители. Полное собрание. Том 4">
                    </a>
                </div>
                <div class="card__bottom">
                    <div class="card__prices">
                        <div class="card__price card__price--discount">2 685</div>
                        <div class="card__price card__price--common">2 685</div>
                    </div>
                    <a href="#" class="card__title">Новые мстители. Полное собрание. Том 4</a>
                    <button class="card__add">
                        В корзину
                        <i class="simbol"></i>
                    </button>
                </div>
            </div>
            <!-- 4 товар -->
        </div>

    </main>
    <!-- ./main-section -->

    <footer class="footer col-12">
        <div class="container navbar">
            <div class="footer__section top">
                <div class="footer-column">Информация</div>
                <ul class="list-unstyled simple-list">
                    <li><a href="#" class="footer_link">Каталог товаров</a></li>
                    <li><a href="#" class="footer_link">Новости</a></li>
                    <li><a href="#" class="footer_link">О «Comics shop»</a></li>
                </ul>
            </div>

            <div class="footer__section top1"> 
                <div class="footer-column">Контакты</div>
                <ul class="list-unstyled simple-list">
                    <li><a href="tel:880099988877" class="footer_link footer-number">8(800) 999-888-77</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- ./footer -->

    <!--
        Выпадающее меню (модальное окно с корзиной)
    -->
    <div class="popup">
        <div class="popup__container" id="popup_container">
            <div class="popup__item">
                <h1 class="popup__title">Оформление заказа</h1>
            </div>
            <div class="popup__item" id="popup_product_list">
                <div class="popup__product">
                    <div class="popup__product-wrap">
                        <img src="assest/img/Cataloge_images/cart2.png" alt="Ящик Пандоры. Книга 11" class="popup__product-image" />
                        <h2 class="popup__product-title">Ящик Пандоры. Книга 11</h2>
                    </div>
                    <div class="popup__product-wrap">
                        <div class="popup__product-price"></div>
                        <button class="popup__product-delete"></button>
                    </div>
                </div>
            </div>
            <div class="popup__item">
                <div class="popup__cost">
                    <h2 class="popup__cost-title">Итого</h2>
                    <output class="popup__cost-value" id="popup_cost"></output>
                </div>
                <div class="popup__cost">
                    <button type="submit" class="theme-background">
                        Оформить заказ
                        <i class="simbol"></i>
                    </button>
                </div>
            </div>
            <button class="popup__close" id="popup_close">X</button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Slider(document.querySelector('.carousel'));
        });
    </script>
    <script src="assest/JS/slider.js"></script>
    <script src="assest/JS/main.js"></script>
</body>
</html>