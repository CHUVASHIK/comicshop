<?php
    // Инициализация пользовательской сессии
    session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы Comics Shop</title>
    <link rel="stylesheet" href="../assest/CSS/revuise_page.css">
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
                <li><a href="#" title="Отзывы" class="last__nav">
                    <span>Отзывы</span>
                </a></li>
            </ul>
        </div>
        <!-- ./subpage_nav -->

        <div class="main__reviuse">
            <h1 class="main__reviuse-title">Отзывы</h1>

            <div class="reviews-list">

                <ul class="reviews-list ">
                    <li class="reviews-list__item">
                        <div class="reviews-content">
                            <div class="reviews-details">

                                <div class="reviews-list__author-name">
                                    <span>Семён</span>
                                </div>

                            </div>
                            <!-- ./details -->

                            <div class="reviews-list__text">
                                <div class="reviews-list__body">

                                    <div class="reviews-list__body-text">Заказал мангу, получил за 2 дня, всё отлично!</div>

                                </div>
                            
                            </div>
                            <!-- ./reviews-list__text -->

                        </div>
                    </li>
                </ul>
                <!-- Первый отзыв -->

                <ul class="reviews-list ">
                    <li class="reviews-list__item">
                        <div class="reviews-content">
                            <div class="reviews-details">

                                <div class="reviews-list__author-name">
                                    <span>Александр Македонский</span>
                                </div>

                            </div>
                            <!-- ./details -->

                            <div class="reviews-list__text">
                                <div class="reviews-list__body">

                                    <div class="reviews-list__body-text">Покупал коллекцию манги для прочтения, пришло всё хорошо.
                                        Ничего не порвано, доставка бесплатная!
                                    </div>

                                </div>
                            
                            </div>
                            <!-- ./reviews-list__text -->

                        </div>
                    </li>
                </ul>
                <!-- Второй отзыв -->

                <ul class="reviews-list ">
                    <li class="reviews-list__item">
                        <div class="reviews-content">
                            <div class="reviews-details">

                                <div class="reviews-list__author-name">
                                    <span>Дима</span>
                                </div>

                            </div>
                            <!-- ./details -->

                            <div class="reviews-list__text">
                                <div class="reviews-list__body">

                                    <div class="reviews-list__body-text">Отличный магазин для покупок разных журналов, доволен.
                                        Всё быстро и без нареканий.
                                    </div>

                                </div>
                            
                            </div>
                            <!-- ./reviews-list__text -->

                        </div>
                    </li>
                </ul>
                <!-- Третий отзыв -->

                <ul class="reviews-list ">
                    <li class="reviews-list__item">
                        <div class="reviews-content">
                            <div class="reviews-details">

                                <div class="reviews-list__author-name">
                                    <span>Анохин</span>
                                </div>

                            </div>
                            <!-- ./details -->

                            <div class="reviews-list__text">
                                <div class="reviews-list__body">

                                    <div class="reviews-list__body-text">Магазин супер, но один раз пришла порванная манга :( Но пообщались с техподдержкой, вопрос был решён.</div>

                                </div>
                            
                            </div>
                            <!-- ./reviews-list__text -->

                        </div>
                    </li>
                </ul>
                <!-- Четвёртый отзыв -->

                <ul class="reviews-list ">
                    <li class="reviews-list__item">
                        <div class="reviews-content">
                            <div class="reviews-details">

                                <div class="reviews-list__author-name">
                                    <span>Гриша</span>
                                </div>

                            </div>
                            <!-- ./details -->

                            <div class="reviews-list__text">
                                <div class="reviews-list__body">

                                    <div class="reviews-list__body-text">Спасибо за хороший магазин. Всё супер!</div>

                                </div>
                            
                            </div>
                            <!-- ./reviews-list__text -->

                        </div>
                    </li>
                </ul>
                <!-- Пятый отзыв -->

            </div>
            <!-- ./reviews-list -->
        </div>
        <!-- ./main__reviuse -->
    </main>
    <!-- ./main-section -->

    <?php
        require "../includes/footer.php";
    ?>
</body>
</html>