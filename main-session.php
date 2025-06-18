<?php
require_once __DIR__ . "/session_config.php";
$_SESSION["SCRIPT_NAME"] = $_SERVER["SCRIPT_NAME"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (!$auth): ?>
        <form action="user-login.php" method="post">
            <div>
                <label>
                    Логин:
                    <input type="text" name="login" value="<?= $user["login"] ?>">
                </label>
            </div>
            <div>
                <label>
                    Пароль:
                    <input type="password" name="password">
                </label>
            </div>
            <div>
                <input type="submit" value="Вход" name="send">
            </div>
        </form>
    <?php else: ?>

        <?php if (isset($_SESSION["user-file"])): ?>
            <div>
                <img style="width: 200px" src="<?= $_SESSION["user-file"] ?>" alt="">
            </div>
        <?php endif ?>
        <div>
            Загрузка файла
            <!-- Тип кодирования данных, enctype, требуется указывать только так, как показывает пример -->
            <form enctype="multipart/form-data" action="user-file.php" method="POST">
                <!-- Название элемента input определяет название элемента в суперглобальном массиве $_FILES -->
                Отправить файл: <input name="userfile" type="file" />
                <input type="submit" value="Отправить файл" />
            </form>

        </div>


        <form action="user-logout.php" method="post">
            <div>
                <input type="submit" value="Выход" name="exit">
            </div>
        </form>
    <?php endif ?>

    <?php var_dump($_SESSION) ?>
</body>

</html>