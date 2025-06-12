
<?php

    $auth = false;
    $login  = "user";    
    $password = password_hash("123", PASSWORD_BCRYPT);    
    $loginClient = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["send"])) {
            $loginClient = trim(strip_tags($_GET["login"])); // очистка параметра
            if ($loginClient && $loginClient === $login) {
                $auth = password_verify($_GET["password"], $password);
            }
        }
        
        if (isset($_GET["exit"])) {
            $auth = false;            
        }
        
        // var_dump($loginClient); die; 
    }


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
        <form action="">
            <div>
                <label>
                    Логин:
                    <input type="text" name="login" value="<?= $loginClient ?>">
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
        <form action="">            
            <div>
                <input type="submit" value="Выход" name="exit">
            </div>
        </form>
    <?php endif ?>
</body>
</html>