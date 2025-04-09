<?php   include("path.php");
        include "applicate/control/users.php";
?>
<html lang="ru">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="asset/css/style.css">
    <title>Sinergetix</title>
</head>
<body>


<div class="wrapper">


<?php include("applicate/include/header.php"); ?>



<main class="main">
    <hr>
<div class="reg_form">
    <form action="reg.php" method="post" class="reg_form_action">
        <h2>Регистрация</h2>
        <div class="err">
            <?php if (!empty($errMsg)): ?>
                <ul>
                    <?php foreach ($errMsg as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>

        <!-- Логин -->
        <div class="form-label">
            <input name="login" value="<?=$login?>" type="text" class="form-control" placeholder="Логин">
        </div>

        <!-- Email -->
        <div class="form-label">
            <input name="mail" value="<?=$email?>" type="email" class="form-control" placeholder="Почта">
        </div>

        <!-- Пароль и Повторите пароль на одной строке -->
        <div class="form-row">
            <div class="form-half">
                <input name="pass-first" type="password" class="form-control" placeholder="Пароль">
            </div>
            <div class="form-half">
                <input name="pass-second" type="password" class="form-control" placeholder="Повторите пароль">
            </div>
        </div>

        <!-- Кнопка регистрации -->
        <div class="btn-label">
            <button type="submit" class="btn-auth" name="button-reg">Регистрация</button>
        </div>
    </form>
</div>

</main>
<hr>

<?php include("applicate/include/footer.php"); ?>

</div>

</body>
</html>