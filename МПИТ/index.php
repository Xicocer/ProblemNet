<?php
session_start();

include "connect.php";
include "header.php";


?>

 <div class="main-form">
        <div class="form-logo" >
            <img src="img/logocolor.png">
        </div>
        <form class="autorization-form" method="POST" action="controllers/login.php">
            <div class="input-title">
                Авторизация
            </div>
            <input name="login" type="text" class="input-form" placeholder="Логин">
            <input name="password" type="text" class="input-form" placeholder="Пароль">

            <button>Войти</button>
        </form>
    </div>