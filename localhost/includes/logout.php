<?php
    // Инициализация сессии
    session_start();

    // Условие, если есть сессия с параметров user, то
    if($_SESSION['user']) {
        session_destroy();  // Уничтожается сессия
        header("Location: ../blocks/Login_page.php"); // Переход на страницу авторизации 
    } else {
        header("Location: ../blocks/Login_page.php");
    }
?>