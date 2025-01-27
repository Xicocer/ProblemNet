<?php
include "connect.php";
include "header.php";
?>
<style>
<?php
 include "css/styleauto.css";
?>
</style>


    <img src="images/bgorange1.png" class="bgd1">
    <img src="images/bgorange2.png" class="bgd2">
    <div class="main-form">
        <div class="form-logo">
            <img src="images/лого (2).png" alt="Logo">
        </div>
        <form class="autorization-form" method="POST" action="controllers/login.php">
            <div class="input-title">Авторизация</div>

            <input name="login" type="text" class="input-form" placeholder="Логин" required>
            <input name="password" type="password" class="input-form" placeholder="Пароль" required>
            <button type="submit" class="submit-button">Войти</button>
        </form>
    </div>

?>