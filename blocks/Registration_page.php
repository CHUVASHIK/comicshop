<?php
    // Инициализация пользовательской сессии
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация на сайте</title>
    <link rel="stylesheet" href="../assest/CSS/registration_page.css">
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
                <li><a href="#" title="Регистрация" class="last__nav">
                    <span>Регистрация</span>
                </a></li>
            </ul>
        </div>
        <!-- ./subpage_nav -->

        <div class="main__authorisation">
            <h1 class="main__authorisation-title">Регистрация</h1>

            <div class="main__authorisation-subtitle">
                Вы зарегистрированы? <a href="Login_page.php" class="main__reg">Авторизируйтесь</a>
            </div>

            <div class="main__authorisation-login">
                <form action="../includes/register.php" method="post">
                    <div class="name">
                        <p class="login-text">Имя</p>
                        <input type="text" name="name" class="login-input" placeholder="Введите имя">
                    </div>

                    <div class="password">
                        <p class="login-text">Фамилия</p>
                        <input type="text" name="surname" class="login-input" placeholder="Введите фамилию">
                    </div>

                    <div class="password">
                        <p class="login-text">Логин <span style="color: red;">*</span></p>
                        <input type="text" name="login" class="login-input" placeholder="Введите логин" required>
                    </div>

                    <div class="password">
                        <p class="login-text">E-mail <span style="color: red;">*</span></p>
                        <input type="email" name="email" class="login-input" placeholder="Введите E-mail" required>
                    </div>

                    <div class="password">
                        <p class="login-text">Пароль <span style="color: red;">*</span></p>
                        <input type="password" name="password" class="login-input" placeholder="Введите пароль" required>
                    </div>

                    <div class="password">
                        <p class="login-text">Повтор пароля <span style="color: red;">*</span></p>
                        <input type="password" name="confirm_password" class="login-input" placeholder="Повторите пароль" required>
                    </div>

                    <button class="main__authorisation-button">Зарегистрироваться</button>

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