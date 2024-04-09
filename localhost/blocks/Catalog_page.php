<?php
    // Инициализация пользовательской сессии
    session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров манги</title>
    <link rel="stylesheet" href="../assest/CSS/catalog_page.css">
    <link rel="stylesheet" href="../assest/CSS/header.css">
    <link rel="stylesheet" href="../assest/CSS/footer.css">
    <link rel="stylesheet" href="../assest/CSS/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        require "../includes/header.php";
    ?>

    <main class="main-section container">
        <div class="subpage_nav">
            <ul class="breadcrumb-nav">
                <li><a href="../index.php" title="Главная">
                    <span>Главная</span>
                </a></li>
                <li><a href="Category_page.php" title="Каталог комиксов">
                    <span>Каталог комиксов</span>
                </a></li>
                <li><a href="#" title="Манга" class="last__nav">
                    <span>Манга</span>
                </a></li>
            </ul>
        </div>
        <!-- ./subpage_nav -->

        <div class="cards" id="cards">

            <div class="card">
                <div class="card__top">
                    <a href="Cart_page.php" class="card__image">
                        <img src="../assest/img/Cataloge_images/cart2.png" alt="Ящик Пандоры. Книга 11" title="Ящик Пандоры. Книга 11">
                    </a>
                </div>
                <div class="card__bottom">
                    <div class="card__prices">
                        <div class="card__price card__price--discount">950</div>
                        <div class="card__price card__price--common">950</div>
                    </div>
                    <a href="#" class="card__title">Ящик Пандоры. Книга 11</a>
                    <button class="card__add">
                        В корзину
                        <i class="simbol"></i>
                    </button>
                </div>
            </div>
            <!-- 1 товар -->

            <div class="card">
                <div class="card__top">
                    <a href="Cart_page.php" class="card__image">
                        <img src="../assest/img/Cataloge_images/cart5.png" alt="Магическая битва. Книга Колония Токио №1" title="Магическая битва. Книга Колония Токио №1">
                    </a>
                </div>
                <div class="card__bottom">
                    <div class="card__prices">
                        <div class="card__price card__price--discount">982</div>
                        <div class="card__price card__price--common">982</div>
                    </div>
                    <a href="#" class="card__title">Магическая битва. Книга Колония Токио №1</a>
                    <button class="card__add">
                        В корзину
                        <i class="simbol"></i>
                    </button>
                </div>
            </div>
            <!-- 2 товар -->

            <div class="card">
                <div class="card__top">
                    <a href="Cart_page.php" class="card__image">
                        <img src="../assest/img/Cataloge_images/cart6.png" alt="Человек бензопила. Книга 5. Купание в ванне" title="Человек бензопила. Книга 5. Купание в ванне">
                    </a>
                </div>
                <div class="card__bottom">
                    <div class="card__prices">
                        <div class="card__price card__price--discount">878</div>
                        <div class="card__price card__price--common">878</div>
                    </div>
                    <a href="#" class="card__title">Человек бензопила. Книга 5. Купание в ванне</a>
                    <button class="card__add">
                        В корзину
                        <i class="simbol"></i>
                    </button>
                </div>
            </div>
            <!-- 3 товар -->

            <div class="card">
                <div class="card__top">
                    <a href="Cart_page.php" class="card__image">
                        <img src="../assest/img/Cataloge_images/cart7.png" alt="Госпожа Кагуя: В любви как на войне" title="Госпожа Кагуя: В любви как на войне">
                    </a>
                </div>
                <div class="card__bottom">
                    <div class="card__prices">
                        <div class="card__price card__price--discount">920</div>
                        <div class="card__price card__price--common">920</div>
                    </div>
                    <a href="#" class="card__title">Госпожа Кагуя: В любви как на войне</a>
                    <button class="card__add">
                        В корзину
                        <i class="simbol"></i>
                    </button>
                </div>
            </div>
            <!-- 4 товар -->

            <div class="card">
                <div class="card__top">
                    <a href="Cart_page.php" class="card__image">
                        <img src="../assest/img/Cataloge_images/cart8.png" alt="Re:Zero. Жизнь с нуля в альтернативном мире" title="Re:Zero. Жизнь с нуля в альтернативном мире">
                    </a>
                </div>
                <div class="card__bottom">
                    <div class="card__prices">
                        <div class="card__price card__price--discount">750</div>
                        <div class="card__price card__price--common">750</div>
                    </div>
                    <a href="#" class="card__title">Re:Zero. Жизнь с нуля в альтернативном мире</a>
                    <button class="card__add">
                        В корзину
                        <i class="simbol"></i>
                    </button>
                </div>
            </div>
            <!-- 5 товар -->

            <div class="card">
                <div class="card__top">
                    <a href="Cart_page.php" class="card__image">
                        <img src="../assest/img/Cataloge_images/cart9.png" alt="Госпожа Кагуя: В любви как на войне. Книга 12" title="Госпожа Кагуя: В любви как на войне. Книга 12">
                    </a>
                </div>
                <div class="card__bottom">
                    <div class="card__prices">
                        <div class="card__price card__price--discount">1 051</div>
                        <div class="card__price card__price--common">1 051</div>
                    </div>
                    <a href="#" class="card__title">Госпожа Кагуя: В любви как на войне. Книга 12</a>
                    <button class="card__add">
                        В корзину
                        <i class="simbol"></i>
                    </button>
                </div>
            </div>
            <!-- 6 товар -->

            <div class="card">
                <div class="card__top">
                    <a href="Cart_page.php" class="card__image">
                        <img src="../assest/img/Cataloge_images/cart10.png" alt="Jungle Juice / Сок Джунгей" title="Jungle Juice / Сок Джунгей">
                    </a>
                </div>
                <div class="card__bottom">
                    <div class="card__prices">
                        <div class="card__price card__price--discount">1 920</div>
                        <div class="card__price card__price--common">1 920</div>
                    </div>
                    <a href="#" class="card__title">Jungle Juice / Сок Джунгей</a>
                    <button class="card__add">
                        В корзину
                        <i class="simbol"></i>
                    </button>
                </div>
            </div>
            <!-- 7 товар -->

            <div class="card">
                <div class="card__top">
                    <a href="Cart_page.php" class="card__image">
                        <img src="../assest/img/Cataloge_images/cart11.png" alt="Fate/Zero - Судьба/Начало" title="Fate/Zero - Судьба/Начало">
                    </a>
                </div>
                <div class="card__bottom">
                    <div class="card__prices">
                        <div class="card__price card__price--discount">1 920</div>
                        <div class="card__price card__price--common">1 920</div>
                    </div>
                    <a href="#" class="card__title">Fate/Zero - Судьба/Начало</a>
                    <button class="card__add">
                        В корзину
                        <i class="simbol"></i>
                    </button>
                </div>
            </div>
            <!-- 8 товар -->
            
            

        </div>
        <!-- ./cards -->
    </main>
    <!-- ./main-section -->

    <?php
        require "../includes/footer.php";
    ?>

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
                        <img src="../assest/img/Cataloge_images/cart2.png" alt="Ящик Пандоры. Книга 11" class="popup__product-image" />
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

    <script src="..assest/JS/main.js"></script>
</body>
</html>