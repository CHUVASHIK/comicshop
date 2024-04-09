<?php
    // Инициализация сессии
    session_start();

    // Подключения файла базы данных
    include "connect.php";

    // Получение параметров из полей формы на странице Login_page.php
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Запрос на выборку поля логин из БД
    $checkUser = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login'");

    // Условие, если есть какая-то запись с введённым логином, то
    if(mysqli_num_rows($checkUser) > 0) {
        $user = mysqli_fetch_assoc($checkUser); // данный запрос делится на ассоциативный массив

        // Условие, если получаемый пароль из формы похож на пароль из БД, то
        if(password_verify($password, $user['password'])) {

            // создаётся двумерный массив сессии со следующими параметрами 
            $_SESSION['user'] = [
                'id' =>  $user['id'],
                'login' => $user['login'],
                'email' => $user['email'],
                'role' => $user['role'],
            ];
            header('Location: ../index.php?message=Вы успешно авторизированы'); // Выполняется переход на главную страницу с строкой GET запроса в поисковой строке
        } else { // в противном случае
            $_SESSION['message'] = 'Пароль указан неверно!'; // Создаётся сообщение сессии
            header('Location: ../blocks/Login_page.php'); // Выполняется переход на страницу авторизации
        }
    } else { // в этом случае
        $_SESSION['message'] = 'Такого пользователя не существует'; // Создаётся сообщение сессии
        header('Location: ../blocks/Login_page.php'); // Выполняется переход на страницу авторизации
    }
?>