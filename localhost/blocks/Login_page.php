<?php
    // Инициализация пользовательской сессии
    session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация на сайте</title>
    <link rel="stylesheet" href="../assest/CSS/login_page.css">
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
                <li><a href="#" title="Авторизация на сайте" class="last__nav">
                    <span>Авторизация на сайте</span>
                </a></li>
            </ul>
        </div>
        <!-- ./subpage_nav -->

        <div class="main__authorisation">
            <h1 class="main__authorisation-title">Авторизация</h1>

            <div class="main__authorisation-subtitle">
                У вас нет аккаунта? <a href="Registration_page.php" class="main__reg">Зарегистрируйтесь</a>
            </div>

            <div class="main__authorisation-login">
                <form action="../includes/login.php" method="post">
                    <div class="login">
                        <p class="login-text">Логин</p>
                        <input type="text" name="login" class="login-input" placeholder="Введите логин">
                    </div>

                    <div class="password">
                        <p class="login-text">Пароль</p>
                        <input type="password" name="password" class="login-input" placeholder="Введите пароль">
                    </div>

                    <button class="main__authorisation-button">Авторизироваться</button>

                    <!-- Блок мини-валидации -->
                    <div class="message">
                        <?= $_SESSION['message']; unset($_SESSION['message']) ?> <!-- При обновлении окна сообщение исчезает -->
                    </div>
                    
                </form>
            </div>
            <!-- ./main__authorisation-login -->

        </div>
    </main>
    <!-- ./main-section -->

    <?php
        require "../includes/footer.php";
    ?>
</body>
</html>