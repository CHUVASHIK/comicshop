<?php
    // Инициализация сессии
    session_start();

    // Подключение файла базы данных
    include "connect.php";

    // Получение параметров из полей формы на странице Registration_page.php
    // htmlspecialchars - защита от внедрения JS-кода 
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $login = htmlspecialchars($_POST['login']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $password_confirm = $_POST['confirm_password'];

    // Выборка данных поля логина из БД
    $userLogin = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login'");

    // Условие, если колонка логина из БД присутствует, то
    if(mysqli_num_rows($userLogin) > 0) {
        // выводит сообщение в сессию
        $_SESSION['message'] = 'Такой логин уже существует!';
        header("Location: ../blocks/Registration_page.php"); // выполняется переход на страницу регистрации
    } else { // в другом случае

        // Создаётся условие на заполненность обязательных полей
        if(!empty($login) && !empty($email) && !empty($password) && !empty($password_confirm))
        {
            // Создаётся условие на проверку индентичности паролей, если пароли равны, то
            if($password == $password_confirm) {
                $password = password_hash($password, PASSWORD_BCRYPT); // Хэширование пароля, шифрование

                // выполняется вставка данных в БД
                mysqli_query($db, "INSERT INTO `users`(`id`, `name`, `surname`, `login`, `email`, `password`, `role`)
                VALUES (NULL, '$name', '$surname', '$login', '$email', '$password', 'user')");

                $_SESSION['message'] = 'Вы успешно зарегистрировались!'; // выводит сообщение в сессию
                header("Location: ../blocks/Login_page.php"); // Выполняется перенаправление на страницу авторизации
            } else { // в противном случае

                $_SESSION['message'] = 'Пароли введены неправильно!';
                header("Location: ../blocks/Registration_page.php"); // выполняется переход на страницу регистрации
            }
        } else { // в другом случае
            $_SESSION['message'] = "Заполните все данные формы"; // создаётся сообщение в сессии
            header("Location: ../blocks/Registration_page.php"); // выполняется переход на страницу регистрации
        }
    }
?>