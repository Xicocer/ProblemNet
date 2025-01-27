<?php
try {
    // Подключение к базе данных
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=ufanet', 'hapat', '123123AzAz');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Ошибка подключения: ' . $e->getMessage();
    exit;
}

// Выполнение SQL-запроса для получения заявок
$sql = "SELECT a.id, p.name AS provider_name, a.post, a.address, a.status 
        FROM suspensions a
        JOIN provider p ON a.id_provider = p.id
        WHERE a.status IN (0, 1, 2)";
$stmt = $pdo->query($sql);

// Получение данных
$applications = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ПроблемНЕТ</title>
  <link rel="stylesheet" type="text/css" href="styles/styleszayavki.css">  
  <style>
    /* Стили из файла */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      display: flex;
      align-items: center;
      border-bottom: 2px solid #800080;
      margin-top: 20px;
    }

    .logo h1 {
      margin: 0;
      font-size: 24px;
    }

    .logo .highlight {
      color: #800080;
    }

    .logo .support {
      color: orange;
    }

    nav {
        margin-bottom: 2px;
        margin-right: 50px;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
        width: 95%;
        margin: 0 auto;
    }
    nav a {
      margin-left: 20px;
      text-decoration: none;
      color: black;
      font-weight: bold;
      text-align: center;
      padding: 5px 10px;
    }

    nav a.active {
      color: white;
      background-color: #800080;
      padding: 5px 10px;
      border-radius: 5px 5px 0 0;
    }

    main {
      padding: 20px;
    }

    .application {
      border: 2px dotted;
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 5px;
    }

    .application.pending {
      border-color: grey;
      margin: 7px;
    }

    .application.pending > h2 {
        font-family: PressStart;
        color: grey;
        margin-bottom: 10px;
    }

    .application.approved {
      border-color: green;
      margin: 7px;
    }

    .application.approved > h2 {
        font-family: PressStart;
        color: green;
        margin-bottom: 10px;
        
    }

    .application.rejected {
      border-color: red;
      margin: 7px;
    }

    .application.rejected > h2 {
        color: red;
        font-family: PressStart;
        margin-bottom: 10px;
    }

    .application h2 {
      margin-top: 0;
    }
  </style>
</head>
<body>
    <div class="shapka">
        <div class="site-title"><a href="map.html">
            <div class="title">
                Проблем<span class="purple-text">Нет</span>
            </div>
            <div class="subtitle">
                при поддержке <span class="orange-text">уфанет</span>
            </div></a>
        </div>
    </div>
    <header>
    <nav>
    <div class="org-name">
        АО «Уфанет»
    </div>
    <div class="hrefs-nav">
    <a href="zayavki.html" class="active">Ваши заявки</a>
    <a href="zapolnzayavki.html">Ваши занятые опоры</a>
    </div>
    </nav>
    </header>

  <main>
    <?php foreach ($applications as $app): ?>
      <section class="application 
        <?= $app['status'] == 0 ? 'pending' : ($app['status'] == 1 ? 'approved' : 'rejected') ?>">
        <h2>
          <?php 
          if ($app['status'] == 0) echo "Заявка на проверке";
          elseif ($app['status'] == 1) echo "Заявка подтверждена";
          elseif ($app['status'] == 2) echo "Заявка отклонена";
          ?>
        </h2>
        <p><strong>Провайдер:</strong> <?= htmlspecialchars($app['provider_name']) ?></p>
        <p><strong>Номер упора:</strong> <?= htmlspecialchars($app['post']) ?></p>
        <p><strong>Адрес:</strong> <?= htmlspecialchars($app['address']) ?></p>
      </section>
    <?php endforeach; ?>
  </main>

  <script>
  // Пример: переключение активной вкладки
  document.querySelectorAll('nav a').forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      document.querySelectorAll('nav a').forEach(item => item.classList.remove('active'));
      window.location = "file:///C:/Users/localRoot/Desktop/myproffesion/zapolnzayavki.html";
      link.classList.add('active');
    });
  });
</script>
</body>
</html>