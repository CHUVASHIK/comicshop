<?php
    // Инициализация пользовательской сессии
    session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты Comics Shop</title>
    <link rel="stylesheet" href="../assest/CSS/contact_page.css">
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
                <li><a href="#" title="Наши контакты" class="last__nav">
                    <span>Наши контакты</span>
                </a></li>
            </ul>
        </div>
        <!-- ./subpage_nav -->

        <div class="main__contact-form">
            <h1 class="main__contact-title">Обратная связь</h1>
            
            <div class="content">
        
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Адрес</div>
                        <div class="text-one">г. Чебоксары</div>
                        <div class="text-two">пр. Мира, 40</div>
                    </div>

                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Телефон</div>
                        <div class="text-one">8-800-000-00-00</div>
                        <div class="text-two">8-900-000-00-00</div>
                    </div>

                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">Volkov@comics.com</div>
                    </div>

                </div>
        
                <!-- Правая колонка: сама форма -->
                <div class="right-side">
                    <div class="topic-text">Отправить</div>
                    <p>
                        Если у вас есть какие-то вопросы или предложения по комиксам -
                        заполните форму ниже и мы скоро свяжемся
                    </p>
                    <!-- Форма обратной связи -->
                    <form action="#">
                        <div class="input-box">
                            <input type="text" placeholder="Ваше имя" />
                        </div>

                        <div class="input-box">
                            <input type="text" placeholder="Введите email" />
                        </div>

                        <div class="input-box">
                            <input type="text" placeholder="Введите телефон" />
                        </div>

                        <div class="input-box message-box">
                            <textarea placeholder="Сообщение"></textarea>
                        </div>

                        <div class="button">
                            <input type="button" value="Отправить" />
                        </div>

                    </form>
                </div>
            </div>
            <!-- ./content -->
        </div>
        <!-- ./main__contact-form -->
    </main>
    <!-- ./main-section -->

    <?php
        require "../includes/footer.php";
    ?>
</body>
</html>