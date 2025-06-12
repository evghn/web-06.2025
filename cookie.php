<?php
    // phpinfo(); die;

    $auth = false;
    if (isset($_COOKIE["auth"])) {
        $auth = true;
        setcookie("auth", "2", time() + 500);
    }

    $login  = "user";    
    $password = password_hash("123", PASSWORD_BCRYPT);    
    $loginClient = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["send"])) {
            $loginClient = trim(strip_tags($_POST["login"])); // очистка параметра
            if ($loginClient && $loginClient === $login) {
                if (password_verify($_POST["password"], $password)) {
                    setcookie("auth", "2", time() + 500);
                }
            }
        }
        
        if (isset($_POST["exit"])) {
            setcookie("auth", "2", time() - 15);
        }
        
        header("Location: " . $_SERVER["SCRIPT_NAME"]);
        exit;        
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
        <form action="" method="post">
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
        <form action="" method="post">            
            <div>
                <input type="submit" value="Выход" name="exit">
            </div>
        </form>
    <?php endif ?>
</body>
</html>