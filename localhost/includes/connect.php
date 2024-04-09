<?php
    // Параметры базы данных
    $db = mysqli_connect('localhost', 'root', '', 'comics_bd');

    // Установка кодировки для БД utf8
    $db->set_charset("utf8");

    // Условие, если не существует базы данных, то выводит ошибку
    if(!isset($db)) {
        die("Ошибка подключения: ". $db->connect_error);
    }
?>