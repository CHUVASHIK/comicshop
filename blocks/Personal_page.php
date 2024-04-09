<?php
    // Инициализация пользовательской сессии
    session_start();

    // Подключение файла базы данных
    include "../includes/connect.php";

    // Получение сессии пользователя
    $userId = $_SESSION['user']['id'];

    // Выборка данных колонок из БД
    $sql = sprintf("SELECT `id`, `name`, `surname`, `email`, `created_at` FROM `users` WHERE `id`='%s'", $userId);
    $result = $db->query($sql); // Выполнение выборки запроса данных из БД

    // Проверка наличия данных и вывод информации
    // Если в БД есть данные в столбцах, то
    if($result->num_rows > 0) {
        // Создаётся цикл, в котором выборка данных делится на ассоциативный массив, с получением параметров
        while($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $surname = $row["surname"];
            $email = $row["email"];
            $created_at = $row['created_at'];
        }
    } else {
        $_SESSION['message'] = 'Вы не авторизированы!';
        return header("Location: Login_page.php");
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../assest/CSS/personal_page.css">
    <link rel="stylesheet" href="../assest/CSS/footer.css">
    <link rel="stylesheet" href="../assest/CSS/header.css">
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
                <li><a href="Personal_page.php" title="Мой кабинет">
                    <span>Мой кабинет</span>
                </a></li>
                <li><a href="#" title="Персональные данные" class="last__nav">
                    <span>Персональные данные</span>
                </a></li>
            </ul>
        </div>
        <!-- ./subpage_nav -->

        <div class="main__personal">
            <h1 class="main__personal-title">Профиль пользователя</h1>

            <div class="main__personal-info-rg">
                <div class="main__personal-date">Дата регистрации: <?= $created_at; ?></div>
            </div>

            <div class="main__personal-information">
                <div class="main__personal-inputs">
                    <p class="personal-text">Имя:</p>
                    <input type="text" class="personal-name" placeholder="<?= $name; ?>">
                </div>

                <div class="main__personal-inputs">
                    <p class="personal-text">Фамилия:</p>
                    <input type="text" class="personal-name" placeholder="<?= $surname; ?>">
                </div>

                <div class="main__personal-inputs">
                    <p class="personal-text">Отчество:</p>
                    <input type="text" class="personal-name" placeholder="">
                </div>

                <div class="main__personal-inputs">
                    <p class="personal-text">E-mail:</p>
                    <input type="email" class="personal-name" placeholder="<?= $email; ?>">
                </div>

                <div class="main__personal-buttons">
                    <button class="main__personal-button">Редактировать</button>
                    <button class="main__personal-button">Сохранить</button>
                </div>
            </div>
        </div>
        <!-- ./main__personal -->
    </main>
    <!-- ./main-section -->

    <?php
        require "../includes/footer.php";
    ?>
</body>
</html>