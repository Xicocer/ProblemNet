<?php require "./header.php"; ?>


<div class="auth">
	<div class="headq" id="login">РЕГИСТРАЦИЯ</div>

	 <?php
    // Проверка наличия сообщения в URL
    if (isset($_GET['message'])) {
        echo '<div class="success-message">' . htmlspecialchars($_GET['message']) . '</div>';
    }
    ?>

	<form action="controllers/register.php" method="POST">
		<input type="text" placeholder="Название" name="name" required>
		<select id="post" name="post" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
		<input type="text" placeholder="Адрес" name="adress" required>
		<button>Подать заявку</button>
	</form>
</div>

<?php require "./footer.php"; ?>