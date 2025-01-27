<?php 

    require "./src/fuctions.php";
    require "./header.php";
?>

<style type="text/css">
    <?php
        include "css/stylereg.css";
    ?>
</style>

    <img src="./img/bgpurple1.png" alt="" class="bgd1">
    <img src="./img/bgpurple2.png" class="bgd2">
    <div class="main-form">
        <div class="form-logo">
            <img src="./img/лого (2).png" alt="Logo">
        </div>
        <form class="autorization-form" method="POST" action="./controllers/registr.php">
            <div class="input-title">
                Регистрация
            </div>
            <input name="name" type="text" class="input-form" placeholder="Название организации" value="<?php echo old('name');?>">
            
            <?php if(hasValidationError('name')): ?>
                <small><?php getErrorMassage('name') ?></small>
            <?php endif; ?> 

            <input name="email" type="email" class="input-form" placeholder="e-mail" value="<?php echo old('email');?>">
            
            <button type="submit" class="submit-button" id="sbbutton">Подать заявку</button>
            <a href="login.php" class="hrefauto">Есть учетная запись</a>
        </form>
    </div>