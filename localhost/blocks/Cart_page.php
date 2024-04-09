<?php
    // Инициализация пользовательской сессии
    session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карточка товара</title>
    <link rel="stylesheet" href="../assest/CSS/cart_page.css">
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
                <li><a href="Catalog_page.php" title="Манга">
                    <span>Манга</span>
                </a></li>
                <li><a href="#" title="Человек-бензопила" class="last__nav">
                    <span>Человек-бензопила</span>
                </a></li>
            </ul>
        </div>
        <!-- ./subpage_nav -->

        <div class="main__cart">
            <h1 class="main__cart-title">Человек-бензопила. Книга 5. Купание в ванне. Чувства собаки</h1>
            <div class="main__cart-left">
                <img src="../assest/img/Cataloge_images/card_info.png" alt="Человек-бензопила. Книга 5. Купание в ванне. Чувства собаки" title="Человек-бензопила. Книга 5. Купание в ванне. Чувства собаки">

                <div class="main__cart-right">
                    <div class="main__cart-price">930₽</div>
                    <button class="main__cart-button">Добавить в корзину</button>
                </div>            

            </div>
            <!-- ./main__cart-left -->

            <div class="main__cart-center-info">
                <div class="main__cart-character">
                    <span>Описание</span>
                    <span>Наличие</span>
                    <span>Характеристика</span>
                </div>
                <div class="description_main">
                    <p>Твёрдый переплёт + супер обложка, 384 страницы, 136х200 мм.
                        <br><br>

                        Санта-Клаус, несмотря на имя, хорошо взгрел охотников на демонов и даже утащил их в ад.
                        Вернулись оттуда Дэндзи, Аки и Пауэр чуть иными.
                        Аки сблизился со своими нерадивыми подопечными, и теперь он чувствует ещё большую
                        ответственность за них. А ещё Хаякава понял, что есть нечто большее в жизни, чем месть.
                        И это накануне битвы с демоном-огнестрелом!
                        <br><br>
                        
                        Пауэр не может забыть то, что испытала во время схватки с демонами в аду, и повсюду следует
                        за Дэндзи – в буквальном смысле. Она с ним и в ванную ходит, и спит.
                        Дэндзи мечтал о таком ещё недавно, но сейчас ощущает нечто странное.
                        Это чувство находит выход в виде необычного признания Макиме.
                        А Макима вот-вот покажет своё истинное лицо…
                        когда в Японию нагрянет демон – огнестрельное оружие.</p>
                </div>
            </div>
            <!-- ./main__cart-center-info -->
        </div>
        <!-- ./main__cart -->
    </main>
    <!-- ./main-section -->

    <?php
        require "../includes/footer.php";
    ?>
</body>
</html>