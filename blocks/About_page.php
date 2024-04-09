<?php
    // Инициализация пользовательской сессии
    session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О компании «Comics Shop»</title>
    <link rel="stylesheet" href="../assest/CSS/about_page.css">
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
                <li><a href="#" title="Об «Comics Shop»" class="last__nav">
                    <span>О компании</span>
                </a></li>
            </ul>
        </div>
        <!-- ./subpage_nav -->

        <div class="main__about">
            <h1 class="main__about-title">Об интернет-магазине ««Comics Shop»»</h1>
            <div class="main__about-information">
                Наш магазин существует открылся недавно, но является уже популярным
                специализированным магазином комиксов России.
                <br><br>
                Мы привыкли думать, что наш магазин выгодно отличается на фоне других книжных и
                комиксных магазинов именно благодаря нашему подходу к делу, оформлению, ассортименту, рекламе
                и общению с покупателями.
                <br><br>
                Мы ценим наших клиентов и стараемся посвящать интересующихся в необъятный, но такой интересный
                и разнообразный мир комиксов.
                <br><br>
                Каждый из наших сотрудников с удовольствием поможет подобрать вам что-то по вкусу, даже если вы не знаете,
                что именно вы ищите или с чего начать знакомство с комиксами.
            </div>
            <h1 class="main__about-title">Наш магазин находится по адресу:</h1>
            <div class="main__about-information">
                <b>г. Чебоксары, ул. Лукина, дом 6</b>
                <br>
                Без перерывов и выходных с 12:00 до 20:00
            </div>
            <div style="position:relative;overflow:hidden; margin-left: 68px; margin-top: 30px;">
                <a href="https://yandex.ru/maps/45/cheboksary/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Чебоксары</a>
                <a href="https://yandex.ru/maps/45/cheboksary/house/ulitsa_filippa_lukina_6/YE4YdwJlSU0CQFtsfX1ycHRrZg==/?ll=47.155085%2C56.131882&utm_medium=mapframe&utm_source=maps&z=17.14" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Филиппа Лукина, 6 — Яндекс Карты</a>
                <iframe src="https://yandex.ru/map-widget/v1/?ll=47.155085%2C56.131882&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgk3NzE4NjI0NTUSdNCg0L7RgdGB0LjRjywg0KfRg9Cy0LDRiNGB0LrQsNGPINCg0LXRgdC_0YPQsdC70LjQutCwLCDQp9C10LHQvtC60YHQsNGA0YssINGD0LvQuNGG0LAg0KTQuNC70LjQv9C_0LAg0JvRg9C60LjQvdCwLCA2IgoNz548QhUNh2BC&z=17.14" width="601" height="406" frameborder="1" allowfullscreen="true" style="position:relative; border-radius: 10px"></iframe>
            </div>
        </div>
        <!-- ./main__about -->
    </main>
    <!-- ./main-section -->

    <?php
        require "../includes/footer.php";
    ?>
</body>
</html>