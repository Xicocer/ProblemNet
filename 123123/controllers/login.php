<?php
    session_start();
    include "../connect.php";

    $sql = sprintf("SELECT * FROM `owner` WHERE `login`='%s'", $_POST["login"]);
    if(!$result = $connect->query($sql))
        return die("Ошибка получения данных: ". $connect->query);

    if($user = $result->fetch_assoc()) {
        if($user["password"] == $_POST["password"]) {

            return header("Location:../map.php");

        }
    }

    return header("Location:../login.php?message=Ошибка логина или пароля");