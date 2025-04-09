<?php
    include "path.php";
    include "applicate/control/topics.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sinergetix - Контакты</title>
  <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
<div class="wrapper">
  
  <?php include("applicate/include/header.php")?>
  <hr>
  <main class="main">
    
    <div class="contacts-container">
        <h1 class="contacts-title">Контакты</h1>
        
        <div class="contacts-content">
            <!-- Левая колонка - информация -->
            <div class="contacts-info">
                <h2>Свяжитесь с нами</h2>
                <p>Если у вас есть вопросы или предложения, вы можете связаться с нами:</p>
                <ul>
                    <li><strong>Email:</strong> sinergetix@gmail.com</li>
                    <li><strong>Телефон:</strong> +7 (900) 123-45-67</li>
                    <li><strong>Адрес:</strong> Ростов Великий, ул. Науки, д. 10</li>
                </ul>
                <h2>Мы в соцсетях:</h2>
                <div class="contacts-social">
                    <a href="#" class="social-link">VK</a>
                    <a href="#" class="social-link">Telegram</a>
                    <a href="#" class="social-link">Instagram</a>
                </div>
            </div>

            <!-- Правая колонка - форма обратной связи -->
            <div class="contacts-form">
                <h2>Оставьте сообщение</h2>
                <form action="contacts.php" method="post">
                    <input type="text" name="name" class="form-control" placeholder="Ваше имя" required>
                    <input type="email" name="email" class="form-control" placeholder="Ваш email" required>
                    <textarea name="message" class="form-control" placeholder="Ваше сообщение" required></textarea>
                    <button type="submit" class="btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>

  </main>
<hr>
  <?php include("applicate/include/footer.php")?>

</div>
</body>
</html>
