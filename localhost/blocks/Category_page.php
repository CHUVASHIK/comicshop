<?php
    // Инициализация пользовательской сессии
    session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Категория товаров Comics Shop</title>
    <link rel="stylesheet" href="../assest/CSS/category_page.css">
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
                <li><a href="#" title="Каталог комиксов" class="last__nav">
                    <span>Каталог комиксов</span>
                </a></li>
            </ul>
        </div>
        <!-- ./subpage_nav -->

        <div class="main__categorys">
            <a href="Catalog_page.php" class="main__categorys-item">
                <img src="../assest/img/Category_images/manga.png" alt="Манга">
                <p class="main__categorys-text">Манга</p>
            </a>

            <a href="Catalog_page.php" class="main__categorys-item">
                <img src="../assest/img/Category_images/marvel.png" alt="Комиксы Marvel">
                <p class="main__categorys-text">Комиксы Marvel</p>
            </a>

            <a href="Catalog_page.php" class="main__categorys-item">
                <img src="../assest/img/Category_images/comics_dc.png" alt="Комиксы DC">
                <p class="main__categorys-text">Комиксы DC</p>
            </a>

            <a href="Catalog_page.php" class="main__categorys-item">
                <img src="../assest/img/Category_images/artbooks.png" alt="Артбуки">
                <p class="main__categorys-text">Артбуки</p>
            </a>

            <a href="Catalog_page.php" class="main__categorys-item">
                <img src="../assest/img/Category_images/sourth_style.png" alt="Западный стиль">
                <p class="main__categorys-text">Западный стиль</p>
            </a>

            <a href="Catalog_page.php" class="main__categorys-item">
                <img src="../assest/img/Category_images/figurs.png" alt="Фигурки">
                <p class="main__categorys-text">Фигурки</p>
            </a>
        </div>
        <!-- ./main__categorys -->
    </main>
    <!-- ./main-section -->

    <?php
        require "../includes/footer.php";
    ?>
</body>
</html>